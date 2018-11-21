<?php

if (isset($_POST['submit'])) {
$name = $_POST['name'];
$subject = $_POST['subject'];
$mailFrom = $_POST['mail'];
$message = $_POST['message'];

// Create the email and send the message
$mailto = "amaansingh160@gmail.com"; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$headers = "From: ".$mailFrom;
$txt = "You have recieved an e-mail from ".$name.".\n\n".$message;
	
mail($mailTo, $subject, $txt, $headers);
header("Location: contact.php?mailsend");
}
