<?php
include_once '../common_includes/cdn.php';
session_start();

// Check if user is logged in
if (!isset($_SESSION["email"])) {
    header("Location: ../../index.php");
    exit();
}

// Include the database connection file
include_once './db_connection.php';

// Initialize variables to store feedback messages
$error = $success = "";

// Get redirect URL
$redirectUrl = isset($_GET['redirect']) ? urldecode($_GET['redirect']) : 'default_page.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form inputs
    $currentPassword = $_POST['currentPassword'];
    $newPassword = $_POST['newPassword'];
    $confirmPassword = $_POST['confirmPassword'];
    $email = $_SESSION['email'];

    // Validate form inputs
    if (empty($currentPassword) || empty($newPassword) || empty($confirmPassword)) {
        $error = "All fields are required.";
    } elseif ($newPassword !== $confirmPassword) {
        $error = "New password and confirmation do not match.";
    } else {
        // Fetch the current password from the database
        $sql = "SELECT password FROM tbl_users WHERE email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();

        // Verify current password
        if (!password_verify($currentPassword, $user['password'])) {
            $error = "Current password is incorrect.";
        } else {
            // Hash the new password
            $hashedPassword = password_hash($newPassword, PASSWORD_BCRYPT);

            // Update the password in the database
            $updateSql = "UPDATE tbl_users SET password = ? WHERE email = ?";
            $updateStmt = $conn->prepare($updateSql);
            $updateStmt->bind_param("ss", $hashedPassword, $email);

            if ($updateStmt->execute()) {
                $success = "Password changed successfully.";
                // Redirect to the original page
                header("Location: " . $redirectUrl);
                exit();
            } else {
                $error = "Failed to change password. Please try again.";
            }
        }
    }
}
?>