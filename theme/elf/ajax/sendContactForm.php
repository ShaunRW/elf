<?php 
/****************************************************
*
* @File:         sendContactForm.php
* @Package:      themeSO
* @Action:       Responsible for checking the form data
					and sending the message email;
* @Author:       Shaun Wilesmith
*
*****************************************************/

	// we use validation functions so include:
	include "validation.inc.php";

	// This sleep simulates load time. Take out of production version.
	sleep(5);

	// Get the user entered data and remove leading/trailing white space.
	$name = trim($_POST['name']);
	$email = trim($_POST['email']);
	$phone = trim($_POST['phone']);
	$message = trim($_POST['message']);

	// Make sure user entered data is valid and safe.
	$result['name_error'] = validate_name($name);
	$result['email_error'] = validate_email($email);
	$result['phone_error'] = validate_phone($phone);
	$result['message_error'] = validate_message($message);

	// check the result of the validation
	if ($result['name_error']!=False || $result['email_error']!=False
			|| $result['phone_error']!=False || $result['message_error']!=False ) {

		// there was atleast 1 failed field. Display an error.
		$result['success'] = False;

	} else {

		// Send Email.
		// this is not working yet because mamp does not support sending mail via localhost... I think.
		if ( mail('shaun.wilesmith@gmail.com', "Website Enquiry", "Name: $name \nPhone: $phone\nMessage:\n$message",
				"From: $email") ){
			$result['success'] = True;
		} else {
			$result['sending_error'] = "There was an error submitting the message, please try again later.";
			$result['success'] = False;
		}
	}

	// return the result object to the client so Javascript can do what
	// it needs to do.
	echo json_encode($result);

?>