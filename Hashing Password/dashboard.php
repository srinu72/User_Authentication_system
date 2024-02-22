<?php 
session_start();
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    $mail = $_SESSION["mail"];

    echo "Welcome, $username!";
    echo "your email-id is :" .$mail;
}
?>