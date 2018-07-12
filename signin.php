<?php

include "databaseconnect.php";

session_start(); // Starting Session
$errors =[]; // Variable To Store Error Message
if (isset($_POST['submit'])) {
    if (empty($_POST['email']) || empty($_POST['password'])) {
        $error = "Email or Password is invalid";
    } else {
// To protect MySQL injection for Security purpose
        $emailAddress = stripslashes($emailAddress);
        $password = stripslashes($password);
        $emailAddress = mysql_real_escape_string($emailAddress);
        $password = mysql_real_escape_string($password);
        if (empty($emailAddress)) {
            array_push($errors, "Email is required");
        }
        if (empty($password)) {
            array_push($errors, "Password is required");
        }
        if (count($errors) == 0) {
            $sql = "INSERT INTO users (email, password)
                        VALUES ('$emailAddress', '$password')";
        }
        
// Selecting Database
        $db = mysql_select_db("users", $conn);
// SQL query to fetch information of registerd users and finds user match.
        $query = mysql_query("select * from login where password='$password' AND email='$emailAddress'", $conn);
        $rows = mysql_num_rows($query);
        if ($rows == 1) {
            $_SESSION['login_user']=$emailAddress; // Initializing Session
            header("location: signedIn.php"); // Redirecting To Other Page
        } else {
            $error = "Email or Password is invalid";
        }
        mysql_close($conn); // Closing Connection
    }
}