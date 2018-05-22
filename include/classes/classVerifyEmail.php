<?php

	require "classLogin.php";

	class verify extends login{

		public function __construct($user){

			$this->con = new mysqli($this->dbHost,$this->dbAdmin,$this->dbPass,$this->dbName);
			$this->checkUserRequest($user);
		}

		public function verifyEmail(){

		}

		public function checkUserRequest($user){

			if (!isset($user)){

        		header("Location:index.php");
			}

			else{

				$valid_user = $this->checkUserValidity($user);

				if ($valid_user == true ){

					$this->verifyEmail();
				}

				else{

        			header("Location:index.php");

				}
			}
		}

		public function checkUserValidity($user){

			$sql = "SELECT user_id FROM users WHERE user_id = '$user' ";
			$result = $this->con->query($sql);

			if ($result->num_rows > 0){

				return true;
			}

			else{

				return false;
			}
		}

		// end of class
	}