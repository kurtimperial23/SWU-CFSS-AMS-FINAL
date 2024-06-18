<?php
session_start();
// Check if the logout form is submitted
if(isset($_POST['logout'])) {
    // Unset all of the session variables
    $_SESSION = array();

    // Destroy the session
    session_destroy();

    // Redirect to the login page after logout
    header("Location: ../../index.php");
    exit();
}