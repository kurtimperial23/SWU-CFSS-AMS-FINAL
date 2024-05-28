<?php
// start session
session_start();

// Include the file containing the database connection code
include "../../Process/db_connection.php";

// Check if admin is logged in and has access
if (!isset($_SESSION["username"]) || $_SESSION["user_role"] != "superAdmin") {
    // Redirect back to the dashboard with an error message
    header("Location: ../Features/dashboard.php?alert=unauthorized");
    exit();
}

// Check if username is provided in the POST request
if (!isset($_POST["username"])) {
    // Redirect back to the dashboard with an error message
    header("Location: ../Features/dashboard.php?alert=invalid_request");
    exit();
}

// Error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);
// Get the username from the POST request
$username = $_POST["username"];

// Prepare and bind the SQL statement to delete the admin based on username
$stmt = $conn->prepare("DELETE FROM tbl_users WHERE username = ?");
$stmt->bind_param("s", $username);

// Execute the statement
if ($stmt->execute()) {
    // Admin deleted successfully
    $_SESSION["success_message"] = "Admin deleted successfully.";
    header("Location: ../Features/dashboard.php?alert=success");
    exit();
} else {
    // Error occurred
    $_SESSION["error_message"] = "Error deleting admin: " . $stmt->error;
    header("Location: ../Features/dashboard.php?alert=failure");
    exit();
}

// Close statement
$stmt->close();

// Close database connection
$conn->close();
?>