/****************************************************
*
* @File:         script.js
* @Package:      elf
* @Action:       Scripts for logic based parts the website;
* @Author:       Shaun Wilesmith
*
*****************************************************/

$(document).ready(function() {
	$("#contact-form").submit( function (event) {

		// don't want the page to redirect
		event.preventDefault();

		// Open the popup to show that is is loading
		var popup = new Foundation.Reveal($('#Contact-Form-Loading'));
		popup.open()

		// remove error message to not confuse the user
		$("#Name-Error").html("");
		$("#Email-Error").html("");
		$("#Phone-Error").html("");
		$("#Message-Error").html("");

		// we need the url to post the data 
		var url = $(this).attr('action');
		var posting = $.post( url, $(this).serialize() );

		// need to process the result of the form submission.
		posting.done( function (data) {

			// json text to javascript object
			var result = JSON.parse(data);
			//alert( data );

			if (result['success']){ // Message was sent!

				// replace the loading animation popup with the success message
				$("#Contact-Form-Loading").html( $("#Contact-Form-Success-Container").html() );

			} else { // oh no, message wasn't sent.
				
				// Display Error Messages for each field so the user know why it failed
				if (result['name_error']!=false) {
					$("#Name-Error").html(result['name_error']);
				}
				if (result['email_error']!=false) {
					$("#Email-Error").html(result['email_error']);
				}
				if (result['phone_error']!=false) {
					$("#Phone-Error").html(result['phone_error']);
				}
				if (result['message_error']!=false) {
					$("#Message-Error").html(result['message_error']);
				}

				// close the popup to show the field error messages
				popup.close();

			}
		});
	});
});