<?php

if (isset($_POST['submit'])){
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$mailfrom = $_POST['mail'];
	$message = $_POST['message'];
	$subject = "from Website"
	$mailTo = "nhossain@ualberta.ca";
	$headers = "From: ".$mailfrom;
	$txt = "You have received an email from ".$fname.".\n\n".$message;

	mail($mailTo,$subject,$txt,$headers);
	header("Location: hello.html?mailsend")
}