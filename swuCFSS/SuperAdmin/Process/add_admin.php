<?php
// Start session
session_start();

// Include the file containing the database connection code
include "../../Process/db_connection.php";
require '../../../vendor/autoload.php';  // PHPMailer autoload

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Get values from text fields and sanitize to avoid SQL injection attacks
$firstname = htmlspecialchars($_POST["firstname"], ENT_QUOTES, 'UTF-8');
$lastname = htmlspecialchars($_POST["lastname"], ENT_QUOTES, 'UTF-8');
$email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
$contactnumber = htmlspecialchars($_POST["contactNumber"], ENT_QUOTES, 'UTF-8');

// Generate a random password if not provided
$password = isset($_POST["password"]) ? $_POST["password"] : bin2hex(random_bytes(4));

// Check if username already exists
$stmt_check = $conn->prepare("SELECT email FROM tbl_users WHERE email = ?");
$stmt_check->bind_param("s", $email);
$stmt_check->execute();
$stmt_check->store_result();

if ($stmt_check->num_rows > 0) {
    // Username already exists, alert failure
    $_SESSION["error_message"] = "Email already exists.";
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
$stmt = $conn->prepare("INSERT INTO tbl_users (first_name, last_name, email, password, contact_number, role, status) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssssi", $firstname, $lastname, $email, $hashed_password, $contactnumber, $role, $status);


if ($stmt->execute()) {
    // Send email with PHPMailer
    $mail = new PHPMailer(true);
    try {
        // Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'kupa.imperial.swu@phinmaed.com';  // Replace with your Gmail address
        $mail->Password = 'hzxnfwwcsvjvyobs';  // Replace with your Gmail password or App Password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Recipients
        $mail->setFrom('kupa.imperial.swu@phinmaed.com', 'Admin');
        $mail->addAddress($email);

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'Admin Account Created';
        $mail->Body    = "<p>Dear $firstname $lastname,</p>
                          <p>Your admin account has been created successfully. Here are your credentials:</p>
                          <p><b>Username:</b> $email</p>
                          <p><b>Password:</b> $password</p>
                          <p>Please change your password after logging in for the first time.</p>";
        $mail->send();
        header("Location: ../Features/admin_manager.php?alert=success");
    } catch (Exception $e) {
        error_log("Message could not be sent. Mailer Error: {$mail->ErrorInfo}");
        header("Location: ../Features/admin_manager.php?alert=emailerror");
    }
} else {
    header("Location: ../Features/admin_manager.php?alert=cantcommit");
}

$stmt->close();
$conn->close();