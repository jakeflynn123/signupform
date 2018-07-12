<?php

include "databaseconnect.php";
session_start();
$response = $_POST["g-recaptcha-response"];
$url = 'https://www.google.com/recaptcha/api/siteverify';
$data = array(
    'secret' => '6LeIxAcTAAAAAGG-vFI1TnRWxMZNFuojJ4WifJWe',
    'response' => $_POST["g-recaptcha-response"]
);
$options = array(
    'http' => array (
    'method' => 'POST',
    'content' => http_build_query($data))
);
$context  = stream_context_create($options);
$verify = file_get_contents($url, false, $context);
$captcha_success=json_decode($verify);
if ($captcha_success->success==false) {
//redirect back to form
    header("Location: http://www.thebestwebsite.com?error=you are a bot");
    exit;
} elseif ($captcha_success->success==true) {
//do logic here
    $firstName = $_POST["firstname"];
    $lastName = $_POST["lastname"];
    $emailAddress = $_POST["email"];
    $dob = $_POST["dob"];
    $password = $_POST["password"];
    $password = md5($password);
    mysqli_query($conn, "INSERT INTO `users`(`firstname`, `lastname`, `email`, `dob`, `password`, `timestamp`) VALUES ('".$firstName."', '".$lastName."', '".$emailAddress."', '".$dob."', '".$password."', CURRENT_TIMESTAMP)");
    $_SESSION['email'] = $emailAddress;
    $_SESSION['success'] = "You are logged in";
    header("Location: http://www.thebestwebsite.com/signedIn.php");
}
