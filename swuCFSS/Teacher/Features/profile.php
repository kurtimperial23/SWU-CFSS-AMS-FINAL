<?php
include_once '../../includes/cdn.php';

$current_page = basename($_SERVER['PHP_SELF']);

// start session
session_start();

// check if user is logged in
if (!isset($_SESSION["username"])) {
    // Redirect back to the login page with an error message
    header("Location: ../../index.php");
    exit();
}

// check if user has access to this page
if ($_SESSION["user_role"] != "teacher") {
    // Redirect back to the login page with an error message
    header("Location: ../../Process/authorization_error.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher Dashboard</title>

    <link rel="stylesheet" href="../../Styles/styles.css">
    <script src="../../Scripts/script.js"></script>
</head>

<body>

    <div class="wrapper">
        <?php include '../../Teacher/includes/sidebar.php'; ?>
        <div class="main">
            <nav class="navbar custom-toggler navbar-expand px-3 border-bottom">
                <button class="btn" id="sidebar-toggle" type="button">
                    <span class="navbar-toggler-icon "></span>
                </button>
                <div class="navbar-collapse navbar p-0 d-flex justify-content-end align-items-center">
                    <span>Welcome back <b>Teacher</b>!</span>
                    <a href="#" class="las la-user-circle ps-2"></a>
                </div>
            </nav>

            <main class="content px-3 py-4">
                <!-- Modal -->
                <?php include ('../../Admin/modals/logoutModal.php'); ?>
                <!-- ENDS HERE -->
                <div class="row h-90">
                    <div class="col-9">
                        <div class="card border-0 h-100">
                            <div class="card-body">
                                <h3 class="mb-4">Profile</h3>
                                <form action="submit_profile.php" method="post">
                                    <div class="form-group row mb-3">
                                        <label for="fullname" class="col-sm-2 col-form-label">Full Name:</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="fullname" name="fullname"
                                                required>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label for="age" class="col-sm-2 col-form-label">Age:</label>
                                        <div class="col-sm-4">
                                            <input type="number" class="form-control" id="age" name="age" required>
                                        </div>
                                        <label for="gender" class="col-sm-2 col-form-label">Gender:</label>
                                        <div class="col-sm-4">
                                            <select class="form-control" id="gender" name="gender" required>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                                <option value="other">Other</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label for="email" class="col-sm-2 col-form-label">Email:</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" id="email" name="email" required>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label for="preferred_subject" class="col-sm-2 col-form-label">Preferred
                                            Subject:</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="preferred_subject"
                                                name="preferred_subject" required>
                                        </div>
                                        <label for="preferred_strand" class="col-sm-2 col-form-label">Preferred
                                            Strand:</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="preferred_strand"
                                                name="preferred_strand" required>
                                        </div>
                                    </div>
                                    <hr> <!-- Horizontal line to separate sections -->
                                    <h3 class="mb-4">Address</h3>
                                    <div class="form-group row mb-4">
                                        <label for="address" class="col-sm-2 col-form-label">Address:</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="address" name="address"
                                                required>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label for="city" class="col-sm-2 col-form-label">City:</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="city" name="city" required>
                                        </div>
                                        <label for="zip" class="col-sm-2 col-form-label">ZIP:</label>
                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" id="zip" name="zip" required>
                                        </div>
                                    </div>
                                    <hr> <!-- Horizontal line to separate sections -->
                                    <h3 class="mb-4">Others</h3>
                                    <div class="form-group row mb-4">
                                        <label for="profile_image" class="col-sm-2 col-form-label">Profile
                                            Image:</label>
                                        <div class="col-sm-10">
                                            <input type="file" class="form-control-file" id="profile_image"
                                                name="profile_image" accept="image/*" required>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <div class="text-end">
                                            <button type="submit" class="btn btn-primary">Save Profile</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card border-0 h-100">
                            <div class="card-body text-center">
                                <!-- User Picture -->
                                <img src="https://via.placeholder.com/250" class="img-fluid rounded-circle mb-3"
                                    alt="User Picture">

                                <!-- Name -->
                                <h4 class="card-title">Jules Mark Abgao</h4>

                                <!-- Status -->
                                <p class="card-text">Status: <span class="text-danger">Overload</span></p>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </main>
    </div>
    </div>
</body>

</html>