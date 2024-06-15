<?php
// Start session
session_start();

// Include the file containing the database connection code
include "../../Process/db_connection.php";

// Get values from text fields and sanitize to avoid SQL injection attacks
$firstname = filter_var($_POST["firstname"]);
$lastname = filter_var($_POST["lastname"]);
$username = filter_var($_POST["username"]);
$password = isset($_POST["password"]) ? $_POST["password"] : "swuphinmashsadmin"; // Default password if not provided
$contactnumber = filter_var($_POST["contactNumber"]);

// Check if username already exists
$stmt_check = $conn->prepare("SELECT username FROM tbl_users WHERE username = ?");
$stmt_check->bind_param("s", $username);
$stmt_check->execute();
$stmt_check->store_result();

if ($stmt_check->num_rows > 0) {
    // Username already exists, alert failure
    $_SESSION["error_message"] = "Username already exists.";
    header("Location: ../Features/dashboard.php?alert=duplicate");
    exit();
}

// Hash the password
$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Set default role to "admin"
$role = "admin";

// Set default status to 1
$status = 1;

// Prepare and bind the SQL statement
$stmt = $conn->prepare("INSERT INTO tbl_users (first_name, last_name, username, email, password, contact_number, role, status) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssssi", $firstname, $lastname, $username, $hashed_password, $contactnumber, $role, $status);

// Execute the statement
if ($stmt->execute()) {
    // Admin added successfully
    header("Location: ../Features/dashboard.php?alert=success");
    exit();
} else {
    // Error occurred
    $_SESSION["error_message"] = "Error: " . $stmt->error;
    header("Location: ../Features/dashboard.php?alert=failure");
    exit();
}