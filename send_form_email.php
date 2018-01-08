<?php
if(isset($_POST['email'])) {
	function died($error) {
		echo "Sorry to hear about it, but there was a problem with the form."
		echo "Check it out and see how we can fix it."
		echo $error;
		die();
	}

	if(!isset($_POST['name']) ||
		!isset($_POST['email']) ||
		!isset($_POST['email'])) {
		died("Looks like you're missing something. Take a look and try again.");
	}

	$name = $_POST['name'];
	$title = $_POST['name'];
	$email_to = $_POST['email'];
	$email_from = 'the.aaron.lee.brooks@gmail.com'
	$email_subject = 'Thanks for checking out my page.'

	$error_message = "";
	$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
	$string_exp = "/^[A-Za-z .'-]+$/";

	if(!preg_match($email_exp, $email_to)) {
		$error_message .= "The email address you entered does not appear to be valid. <br />";
	}

	if(!preg_match($string_exp, $name)) {
		$error_message .= "The name you entered does not appear to be valid. <br />";
	}

	if(!preg_match($string_exp, $title)) {
		$error_message .= "The title you entered does not appear to be valid. <br />";
	}

	if(strlen($error_message) > 0) {
    	died($error_message);
 	}

 	$email_message = "Form details below.\n\n";
 
 	function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }

    echo $name;
    echo $email_to;
    echo $title;
}
?>