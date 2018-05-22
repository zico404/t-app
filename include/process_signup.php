<?php

require_once "classes/classSignUp.php";

	$signup = new signup();

	
if ( isset($_POST["signup"]) ){

	$fname = filter_var($_POST["fname"],FILTER_SANITIZE_STRING);
	$lname = filter_var($_POST["lname"],FILTER_SANITIZE_STRING);
	$email = $_POST["email"];
	$password = filter_var($_POST["password"],FILTER_SANITIZE_STRING);
	$confirm_password = filter_var($_POST["confirm_password"],FILTER_SANITIZE_STRING);
	$role = $_POST["role"];


	// check if fields are empty or invalid


	if (strlen($fname) <=2 ){

		array_push($error_list,"<li>First name is either invalid or empty.</li>");
		$signup->error = 1;

	}

	if (strlen($lname) <=2 ){

		array_push($error_list,"<li>Last name is either invalid or empty.</li>");
		$signup->error = 1;

	}


	if (empty($email)){

		array_push($error_list,"<li>Email is required.</li>");
		$signup->error = 1;

	}

	else if ($signup->testEmail($email) == false){

		array_push($error_list,"<li>Invalid email address received.</li>");
		$signup->error = 1;

	}

	else{

		$email = $signup->testEmail($email);
	}

	if (empty($password)){

		array_push($error_list,"<li>Password field is required.</li>");
		$signup->error = 1;
	}

	if (empty($confirm_password)){

		array_push($error_list,"<li>Confirm password field is required.</li>");
		$signup->error = 1;
	}

	if ($confirm_password !== $password){

		array_push($signup->error_list,"<li>Passwords do not match.</li>");
		$error = 1;

	}


	// signup if no error was found

	if ( $signup->error == 0 ){

			if (isset($_POST["agree"])){

				$create_user = $signup->create_user($fname,$lname,$email,$password,$role);

				if ($create_user == true){

					header("Location:verify.php?u=$signup->user_id");
				}

				else{

					array_push($signup->error_list,"<li>Failed to signup, try again.</li>");
					$signup->error = 1;
				}

			}

			else{

				array_push($signup->error_list,"<li>You must agree to our terms to continue.</li>");
				$signup->error = 1;
			}


		}

	}


