<?php

// please only use the fields thata re present in the html form itself for now we have listed all possible ones

$to = "michel.fraire@gmail.com";

if (isset($_POST)){

	$subject = "Segnaly system email";
	
	if ($_POST['fullname'] ! =''){
		$message = "Fullname: " . $_POST['fullname'];
	} else {
		$message = "First name: " . $_POST['FNAME'];
		$message = "Last name: " . $_POST['LNAME'];
	}
	$message .= "<br>Phone: " . $_POST['PHONE'];
	$message .= "<br>Email: " . $_POST['EMAIL'];
	
};

$headers  = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type: text/html; charset=utf-8" . "\r\n";
$headers .= "From: " . $_POST['fullname'] . " <" . $_POST['email'] . ">". "\r\n";

if( mail($to, $subject, $message, $headers) ) {
	echo "ok";
} else {
	echo "error";
}