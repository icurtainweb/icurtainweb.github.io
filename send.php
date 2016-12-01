<?php

$name=$_POST['fname'];
$email=$_POST['email'];

$subject=$_POST['fname'];
$message="";
$message .="Name : ".$name."<br/>";
$message .="Email : ".$email."<br/>";
$message .="Message : ";
$message .=$_POST['msg']."<br/>";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$to="info@icurtain.co.nz";
// More headers
mail($to,$subject,$message,$headers);

echo '<script>alert("Thanks For Sending Mail");
 window.location = "http://www.icurtain.co.nz/contact.html";</script>';

















?>