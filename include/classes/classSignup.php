<?php

	require "classLogin.php";

	class signup extends login{

		public $user_id;

	//check if email exists

	public function emailExists($email){

		$sql = "SELECT email FROM users WHERE email = '$email' ";
		$result = $this->con->query($sql);

		if ($result->num_rows > 0){

			array_push($this->error_list,"<li> This email address has been taken.</li>");
			$this->error = 1;
			return true;
		}

		else{

			return false;
		}
	}

	// function to create user

	public function create_user($fname,$lname,$email,$password,$role){

		if (!$this->con->connect_error){

			if ( $this->emailExists($email) == false ){

				//user id generator

				$text = substr(str_shuffle("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ012346789"),0,6);	
				$time = substr(time(),6,4);
				$this->user_id = $text.$time;

				$stmt = $this->con->prepare("INSERT INTO users (firstname,lastname,email,password,user_id,role,user_ip,reg_time) VALUES(?,?,?,?,?,?,?,?)");
				$stmt->bind_param("sssssssi",$set_fname,$set_lname,$set_email,$set_password,$set_user_id,$set_role,$set_user_ip,$set_reg_time);

				$set_fname = $fname;
				$set_lname = $lname;
				$set_email = $email;
				$set_password = password_hash($password,PASSWORD_DEFAULT);
				$set_user_id = $this->user_id;
				$set_role = $role;
				$set_user_ip = $_SERVER["REMOTE_ADDR"];
				$set_reg_time = time();

				$result = $stmt->execute();
				$stmt->close();

				if ($result){

					return true;
				}

				else{

					return false;
				}

			}
		}
	}


	// end of class

}