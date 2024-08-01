<?php
require_once ('../../common_processes/db_connection.php');
session_start();

if (!isset($_SESSION["email"])) {
    header("Location: ../../index.php");
    exit();
}

if ($_SESSION["user_role"] != "admin") {
    header("Location: ../../common_processes/authorization_error.php");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!mysqli_ping($conn)) {
        mysqli_close($conn);
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
    }

    if (isset($_FILES['curriculumFile']) && $_FILES['curriculumFile']['error'] === UPLOAD_ERR_OK) {
        $tmpName = $_FILES['curriculumFile']['tmp_name'];
        $csvAsArray = array_map('str_getcsv', file($tmpName));

        $json = json_encode($csvAsArray);

        $jsonFile = '../../uploads/curriculum.json';
        file_put_contents($jsonFile, $json);

        header("Location: ../Features/curriculum.php");
        exit();
    } else {
        echo "Error uploading file.";
    }
}
