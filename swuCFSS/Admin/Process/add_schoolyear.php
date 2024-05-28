<?php
// Start session
session_start();

// Include the file containing the database connection code
include "../../Process/db_connection.php";

// Retrieve form data
$schoolYearName = filter_var($_POST["schoolYearName"], FILTER_SANITIZE_STRING);
$schoolYearStartDate = $_POST["schoolYearStartDate"];
$schoolYearEndDate = $_POST["schoolYearEndDate"];
$firstSemStartDate = $_POST["1stSemStartDate"];
$firstSemEndDate = $_POST["1stSemEndDate"];
$secondSemStartDate = $_POST["2ndSemStartDate"];
$secondSemEndDate = $_POST["2ndSemEndDate"];

// Validate input (you can add more validation as per your requirements)
if (empty($schoolYearName) || empty($schoolYearStartDate) || empty($schoolYearEndDate) || empty($firstSemStartDate) || empty($firstSemEndDate) || empty($secondSemStartDate) || empty($secondSemEndDate)) {
    $_SESSION["error_message"] = "Please fill in all fields.";
    header("Location: ../Features/schoolYear.php?alert=failure");
    exit();
}

// Insert data into database
$stmt = $conn->prepare("INSERT INTO tbl_schoolyear (schoolyear_name, schoolyear_start_date, schoolyear_end_date, 1stsem_start_date, 1stsem_end_date, 2ndsem_start_date, 2ndsem_end_date) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssss", $schoolYearName, $schoolYearStartDate, $schoolYearEndDate, $firstSemStartDate, $firstSemEndDate, $secondSemStartDate, $secondSemEndDate);

if ($stmt->execute()) {
    // School year added successfully
    $_SESSION["success_message"] = "School year added successfully.";
    header("Location: ../Features/schoolYear.php?alert=success");
    exit();
} else {
    // Error occurred
    $_SESSION["error_message"] = "Error: " . $stmt->error;
    header("Location: ../Features/schoolYear.php?alert=failure");
    exit();
}

// Close statement
$stmt->close();

// Close database connection
$conn->close();
?>