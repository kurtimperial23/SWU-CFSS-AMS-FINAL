<?php
include "../../Process/db_connection.php";

// Check if form data is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $adminId = $_POST['adminId'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $contactNumber = $_POST['contactNumber'];

    // Update admin details in the database
    $stmt = $conn->prepare("UPDATE tbl_users SET first_name = ?, last_name = ?, contact_number = ? WHERE id = ?");
    $stmt->bind_param("sssi", $firstname, $lastname, $contactNumber, $adminId);
    if ($stmt->execute()) {
        echo "success";
    } else {
        echo "error";
    }
}
?>