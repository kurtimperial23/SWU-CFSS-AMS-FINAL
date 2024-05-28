<?php
    $db_server = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "swushsdb";

    // Create connection
    $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Error reporting
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
?>