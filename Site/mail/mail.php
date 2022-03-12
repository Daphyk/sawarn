<?
$first_name = $_POST{'first_name'};
$last_name = $_POST{'last_name'};
$email = $_POST{'email'};
$subject = $_POST{'subject'};
$message = $_POST['message'];

$email_message = "

First Name: ".$first_name."
Last Name: ".$last_name."
Email: ".$email."
Subject: ".$subject."
Message: ".$message."

";

mail ("name@youremail.com" , "You Received a Message", $email_message);
header("location: ../mail-success.html");
?>


