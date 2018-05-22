<?php

require_once "include/constants.php";
session_start();

class login{

	// Database variables

	public $dbHost = dbHost;
	public $dbAdmin = dbAdmin;
	public $dbPass = dbPWord;
	public $dbName = dbName;
	public $con;

	public $error_list = array();
	public $error = 0;

	private $userEmail;
	private $userPassWord;
	public $user_id;

	public function __construct(){

		$this->con = new mysqli($this->dbHost,$this->dbAdmin,$this->dbPass,$this->dbName);

	}

	//function to test email validity

	public function testEmail($email){

		$this->userEmail = filter_var($email,FILTER_VALIDATE_EMAIL);

		if ($this->userEmail){

			return $this->userEmail;
		}

		else{

			return false;
		}
	}

	// function to rerturn user input in input fields

	public function returnInput($text){

		if (isset($_POST[$text])){

			$text = $_POST[$text];
			echo $text;
		}
	}

	// function to return all errors

	public function error_list($error){

		foreach($error as $e){

			echo $e."<br>";
		}
	}


	// function to log user in

	public function user_login($email,$password){

		$sql = "SELECT email,user_id,password FROM users WHERE email = '$email' ";

		if (!$this->con->connect_error){

			$result = $this->con->query($sql);

			if ($result->num_rows > 0){

				while ($row = $result->fetch_assoc()){

					$this->user_id = $row["user_id"];
					$this->userPassWord = $row["password"];

					if ( password_verify($password,$this->userPassWord) ){

						return true;
					}

					else{

						return false;
					}

				}

			}
		}
	}


	// cache user id 

	public function cache_user(){

		setcookie("user_id",$this->userEmail,time() + (86400*3),"/");
		setcookie("user_key",$this->userPassWord,time() + (86400*3),"/");
	}


	// public function __destruct(){

	// 	$this->con->close();
	// }

}

