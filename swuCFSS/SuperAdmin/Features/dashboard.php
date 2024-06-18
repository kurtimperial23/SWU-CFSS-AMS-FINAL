<?php
include_once '../../common_includes/cdn.php';
$current_page = basename($_SERVER['PHP_SELF']);

// Start session
session_start();

// Check if user is logged in
if (!isset($_SESSION["email"])) {
    // Redirect back to the login page with an error message
    header("Location: ../../../index.php");
    exit();
}

// Check if user has access to this page
if ($_SESSION["user_role"] != "superAdmin") {
    // Redirect back to the login page with an error message
    header("Location: ../../common_processes/authorization_error.php");
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">

<link rel="stylesheet" href="../../Styles/styles.css">
<script src="../../Scripts/script.js"></script>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Information Form</title>
    <style>
    .form-container {
        width: 40%;
        margin: 20px auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 8px;
        box-sizing: border-box;
        font-family: Arial, sans-serif
    }

    form label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold
    }

    form .input-row {
        display: flex;
        margin-bottom: 15px
    }

    form .input-row>div {
        flex: 1;
        margin-right: 5px
    }

    form .input-row>div:last-child {
        margin-right: 0
    }

    form .input-row input,
    form .input-row select {
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        font-size: 16px
    }

    form input[type="submit"] {
        width: auto;
        padding: 10px 20px;
        background-color: #0d6efd;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px
    }

    form input[type="submit"]:hover {
        background-color: #45a049
    }

    .alert {
        position: absolute;
        display: block;
        right: 10
    }
    </style>
</head>

<body>
    <div class="wrapper">
        <aside id="sidebar" class="js-sidebar">
            <div class="h-100 sidebar-background">
                <div class="sidebar-logo">
                    <a href="#">Logo</a>
                </div>
                <ul class="sidebar-nav">
                    <li class="sidebar-header">
                        Add Admin
                    </li>
                    <li class="sidebar-item">
                        <a href="../Features/dashboard.php" class="sidebar-link <?php if ($current_page == 'dashboard.php')
                            echo 'active'; ?>">
                            <i class="fa-solid fa-list pe-2"></i>
                            Dashboard
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="../Features/admin_manager.php" class="sidebar-link <?php if ($current_page == 'admin_manager.php')
                            echo 'active'; ?>">
                            <i class="fa-solid fa-user-pen pe-2"></i>
                            Manage Admins
                        </a>
                    </li>
                    <li class="sidebar-header">
                        Others
                    </li>
                </ul>
                <ul class="sidebar-nav mt-auto">
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link" data-bs-toggle="modal" data-bs-target="#logoutModal">
                            <i class="fas fa-sign-out-alt"></i>
                            Logout
                        </a>
                    </li>
                </ul>
            </div>
        </aside>

        <div class="main">
            <nav class="navbar custom-toggler navbar-expand px-3 border-bottom">
                <button class="btn" id="sidebar-toggle" type="button">
                    <span class="navbar-toggler-icon "></span>
                </button>
                <div class="navbar-collapse navbar p-0 d-flex justify-content-end align-items-center">
                    <span>Welcome back <b>Super Admin</b>!</span>
                    <a href="#" class="las la-user-circle ps-2"></a>
                </div>
            </nav>


            <main class="content px-3 py-4">
                <?php include ('../../Admin/modals/logoutModal.php');
                // Display alerts based on URL parameter
                if (isset($_GET['alert'])) {
                    $alert = $_GET['alert'];
                    if ($alert === 'success') {
                        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>Success!</strong> Admin added successfully.
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>';
                    } elseif ($alert === 'failure') {
                        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong>Error!</strong> Error occurred while adding admin.
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>';
                    } elseif ($alert === 'duplicate') {
                        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong>Error!</strong> Username already exists. Choose another one.
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>';
                    }
                }
                ?>

                <div class="form-container">
                    <h3>Add Admin Form</h2>
                        <form id="userForm" method="post" action="../superAdmin_processes/add_admin.php">
                            <div class="input-row">
                                <div>
                                    <label for="username">First Name</label>
                                    <input type="text" id="username" name="firstname" required>
                                </div>
                                <div>
                                    <label for="contact">Last Name</label>
                                    <input type="text" name="lastname" required>
                                </div>
                            </div>
                            <div class="input-row">
                                <div>
                                    <label for="email">Email</label>
                                    <input type="email" name="email" placeholder="e.g. kurthydeinimperial@gmail.com"
                                        required>
                                </div>
                            </div>
                            <div class="input-row">
                                <div>
                                    <label for="username">Contact Number</label>
                                    <input type="number" name="contactNumber" maxlength="11"
                                        placeholder="e.g. 09683171436" required>
                                </div>
                            </div>
                            <div class="input-row">
                                <div class="text-end">
                                    <input type="submit" value="Submit">
                                </div>
                            </div>
                        </form>
                </div>
            </main>
        </div>
</body>

</script>

</html>