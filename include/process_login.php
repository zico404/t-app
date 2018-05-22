<?php

require_once "classes/classLogin.php";

	$login = new login();

	
if ( isset($_POST["login"]) ){

	$email = $_POST["email"];
	$password = filter_var($_POST["password"],FILTER_SANITIZE_STRING);


	// check if fields are empty or invalid


	if (empty($email)){

		array_push($login->error_list,"<li>Email address field is empty</li>");
		$login->error = 1;

	}

	else if ($login->testEmail($email) == false){

		array_push($login->error_list,"<li>Invalid email address received</li>");
		$login->error = 1;

	}

	else{

		$email = $login->testEmail($email);
	}

	if (empty($password)){

		array_push($login->error_list,"<li>Password field is empty</li>");
		$login->error = 1;
	}


	// login if no error was found

	if ($login->error == 0){

		$loginUser = $login->user_login($email,$password);

		if ($loginUser == true){

			if ( $_SESSION["user_id"] == $login->user_id ){

				array_push($login->error_list,"<li>You are already logged in</li>");
				$login->error = 1;
			}

			else{

				//check if user clicked remember me button

				if (isset($_POST["remember"])){

					$login->cache_user();

				}

				//create session with user id
				$_SESSION["user_id"] = $login->user_id;

				//redirect user
				header("Location:index.php");
			}

		}

		else{
				array_push($login->error_list,"<li>Invalid account details received</li>");
				$login->error = 1;

		}

	}


}

