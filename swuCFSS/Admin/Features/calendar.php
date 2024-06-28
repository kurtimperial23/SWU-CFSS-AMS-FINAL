<?php require_once('../../common_includes/cdn.php');

// start session
session_start();

// check if user is logged in
    if (!isset($_SESSION["email"])) {  
       // Redirect back to the login page with an error message
       header("Location: ../../index.php");
       exit();
    }

// check if user has access to this page
    if ($_SESSION["user_role"] != "admin") {
       // Redirect back to the login page with an error message
       header("Location: ../../common_processes/authorization_error.php");
       exit();
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHS Faculty</title>

    <link rel="stylesheet" href="../../Styles/styles.css">
</head>

<body>

    <div class="wrapper">
        <?php include('../admin_includes/sidebar.php'); ?>
        <div class="main">
            <?php include '../admin_includes/admin_nav.php' ?>

            <main class="content px-3 py-4">
                <div class="container-fluid">
                    <?php include '../../Admin/admin_includes/dashboardBanner.php';?>
                    <!-- SAME ROW OF DASHBOARD BANNER BUT LIKE I JUST PUT IT HERE KAY FOR EVERY PAGE LAHE LAHE -->
                    <div class="col-12 col-md-2 d-flex">
                        <div class="card flex-fill border-0">
                            <div class="card-body d-flex justify-content-center align-items-center">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#exampleModalCenter" disabled>Add Subjects</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- modals -->
                <?php include('../modals/logoutModal.php'); ?>

                <!-- ENDS HERE -->
                <div class="card border-0">
                    <div class="card-body">
                        <div class="table-responsive">
                            <div id="calendar" class="table-responsive"></div>
                        </div>
                    </div>
                </div>
        </div>
        </main>
    </div>
    </div>
</body>
<script src="../../Scripts/script.js"></script>

</html>