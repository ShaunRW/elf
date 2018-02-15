<?php
/****************************************************
*
* @File:         validation.inc.php
* @Package:      themeSO
* @Action:       Defines validation functions for all
					of the user input fields;
* @Author:       Shaun Wilesmith
*
*****************************************************/

	// Critieria:
	// 		- Must not be empty.
	//		- Must not have special characters.
	function validate_name( $name ) {

		if (empty($name)) {
			return "This field is required.".$name;	

		} else {
			// has( a-z A-Z 0-9 - \space )only
			if (preg_match("/^[a-z0-9-\s]+$/i", $name)) {
				return False;

			} else {
				return "Please use letters, numbers, hyphens, and spaces only.";
			}
		}
	}

	// Critieria:
	// 		- Must not be empty.
	//		- Must be valid email
	function validate_email( $email ) {

		if (empty($email)) {
			return "This field is required.".$email;	

		} else {
			// check if valid email
			$reg = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
			if (preg_match($reg, $email)) {
				return False;

			} else {
				return "Please enter a valid Email Address.";
			}
		}
	}

	// Critieria:
	// 		- Must be numbers only
	//		- exactly 10 digits
	function validate_phone( $phone ) {

		if (!empty($phone)) {
			if (preg_match("/^[0-9]{10}$/", $phone)) {
				return False;

			} else {
				return "Please enter your full phone number (including area code) without any spaces or symbols.";
			}

		} else {
			return False;
		}
	}

	// Critieria:
	// 		- Must not be empty.
	function validate_message( $message ) {

		if (empty($message)) {
			return "This field is required.".$message;	

		} else {
			return False;
		}
	}

?>
