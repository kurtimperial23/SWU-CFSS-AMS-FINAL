<?php
include_once '../../common_includes/cdn.php';
require_once ('../../common_processes/db_connection.php');

// Get the user's email from the session
$email = $_SESSION["email"];

// Fetch the user's name from the database
$sql = "SELECT first_name FROM tbl_users WHERE email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result1 = $stmt->get_result();
$user = $result1->fetch_assoc();

$name = $user['first_name'];


?>

<nav class="navbar custom-toggler navbar-expand px-3 border-bottom">
    <button class="btn" id="sidebar-toggle" type="button">
        <span class="navbar-toggler-icon "></span>
    </button>
    <div class="navbar-collapse navbar p-0 d-flex justify-content-end align-items-center">
        <span>Welcome back Admin <b><?php echo htmlspecialchars($name); ?></b>!</span>
        <a href="#" class="las la-user-circle ps-2"></a>
    </div>
</nav>