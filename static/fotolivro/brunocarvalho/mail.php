<?php

// Reading 3d book variables
$myemail = $_POST["myemail"];
$thename = $_POST["nume"];
$email = $_POST["mail"];
$msg = $_POST["mesaj"];
$contentmsg = "Name: ".$thename."\nEmail: ".$email."\n\nMessage: \n".$msg;


// Mail setup
$to=$myemail; 
$subject="Message from 3D Book"; 

$headers .= "From: ".$email."\n";

mail($to,$subject,$contentmsg,$headers);

?>