<?php
session_start();

// Include the file containing the database connection code
include "db_connection.php";

// Get the username from the form
$username = $_POST["txtusername"];
$password = $_POST["txtpassword"];

// Prepare a SQL statement to retrieve the user's information by username
$sql = "SELECT * FROM tbl_users WHERE username = ?";

// Prepare the SQL statement
$stmt = mysqli_prepare($conn, $sql);

if ($stmt) {
    // Bind parameters to the prepared statement
    mysqli_stmt_bind_param($stmt, "s", $username);

    // Execute the prepared statement
    mysqli_stmt_execute($stmt);

    // Get the result set from the prepared statement
    $result = mysqli_stmt_get_result($stmt);

    // Check if there is a matching row in the database
    if (mysqli_num_rows($result) > 0) {
        // Fetch the user row
        $row = mysqli_fetch_assoc($result);
        
        // Verify the hashed password
        if (password_verify($password, $row['password'])) {
            // Password is correct
            // Get the user role
            $user_role = $row['role'];

            // Store user role and username in session variables
            $_SESSION['user_role'] = $user_role;
            $_SESSION['username'] = $username;
            $_SESSION['id'] = $id;

            // Redirect the user based on their role
            switch ($user_role) {
                case 'admin':
                    header("Location: ../Admin/Features/dashboard.php");
                    break;
                case 'superAdmin':
                    header("Location: ../SuperAdmin/Features/dashboard.php");
                    break;
                case 'coordinator':
                    header("Location: ../Coordinator/dashboard.php");
                    break;
                case 'teacher':
                    header("Location: ../Teacher/Features/teacher.php");
                    break;
                default:
                    // Redirect back to the login page with an error message
                    header("Location: ../index.php?error=invalid_role");
                    break;
            }
            exit();
        } else {
            // Password is incorrect
            header("Location: ../index.php?error=invalid_credentials");
            exit();
        }
    } else {
        // No matching username found
        header("Location: ../index.php?error=invalid_credentials");
        exit();
    }
} else {
    // Error handling if the prepared statement fails
    die("Error in query: " . mysqli_error($conn));
}

// Close the statement and connection
// mysqli_stmt_close($stmt);
// mysqli_close($conn);
?>