<?php

$name = $_POST['name'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$to = "jindessi.rabe@gmail.com";
$subject = $subject;
$txt = $message;
$headers = "From: ".$email;


if( mail($to,$subject,$txt,$headers) ){
    echo json_encode( array("success" => true, "name" => $name ) );
}
else{
    echo json_encode( array("success" => false ) );
}