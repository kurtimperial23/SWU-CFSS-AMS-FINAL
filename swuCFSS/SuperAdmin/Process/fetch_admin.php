<?php
include "../../Process/db_connection.php";

// Check if admin ID is set
if (isset($_POST['adminId'])) {
    $adminId = $_POST['adminId'];

    // Fetch admin details from the database
    $stmt = $conn->prepare("SELECT * FROM tbl_users WHERE id = ?");
    $stmt->bind_param("i", $adminId);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Return admin details as JSON
        $admin = $result->fetch_assoc();
        echo json_encode($admin);
    }
}
?>