<?php

if (isset($_POST["submit"])) {
	$name = $_POST["name"];
	$subject = $_POST["subject"];
	$mailfrom = $_POST["email"];
	$message = $_POST["message"];
	
	$mailto = "kmjtheanchorage@gmail.com";
	$headers ="from: ".$mailfrom;
	$txt = "you have receieved an e-mail from".$name.".\n\n".$message;
	
	mail($mailto, $subject, $txt, $headers);
	header("location: google.com?mailsend");
}