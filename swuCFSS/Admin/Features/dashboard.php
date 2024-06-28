<?php require_once ('../../common_includes/cdn.php');

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
    <title>Admin Dashboard</title>

    <link rel="stylesheet" href="../../Styles/styles.css">
</head>

<body>

    <div class="wrapper">
        <?php include '../../Admin/admin_includes/sidebar.php'; ?>
        <div class="main">
            <?php include '../admin_includes/admin_nav.php' ?>

            <main class="content px-3 py-4">
                <div class="container-fluid">
                    <?php include '../../Admin/admin_includes/dashboardBanner.php'; ?>
                    <div class="col-12 col-md-2 d-flex">
                        <div class="card flex-fill border-0 dashboard-dropdown">
                            <!-- dropdown button -->
                            <h6 class="pt-2 ps-2 ">Set Active School Year</h6>
                            <div class="btn-group dropdown-center px-2">
                                <button type="button" class="btn btn-primary btn-sm dropdown-toggle"
                                    data-bs-toggle="dropdown" id="schoolYearDropdown" aria-expanded="false">
                                    Set Active School Year
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="schoolYearSelectConfirmationLabel">
                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#schoolYearSelectConfirmation"
                                            data-school-year="2023-2024">2023-2024</a></li>
                                    <li><a class="dropdown-item" href="#" data-bs-toggle="modal"
                                            data-bs-target="#schoolYearSelectConfirmation"
                                            data-school-year="2024-2025">2024-2025</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- modals -->
                <div class="modal fade" id="schoolYearSelectConfirmation" tabindex="-1" role="dialog"
                    aria-labelledby="schoolYearSelectConfirmationLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="confirmationModalLabel">Confirmation</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Are you sure you want set <span id="schoolYearSpan"></span> as the active school
                                year?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Preview</button>
                                <a href="#" id="confirmSwitchLink" class="btn btn-primary">Confirm</a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php include ('../modals/logoutModal.php'); ?>

                <div class="card border-0">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h5 class="card-title m-0">Curriculum</h5>
                            </div>
                            <div class="col-auto">
                                <select name="semester-dropdown" id="semester-dropdown"
                                    class="form-select form-select-sm">
                                    <option value="Semester 1">Semester 1</option>
                                    <option value="Semester 2">Semester 2</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="card-body">
                        <h3 class="text-center">Grade 11</h3>
                        <h4 class="text-center">STEM-Health</h4>
                        <table id="myTable" class="table table-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Subject Code</th>
                                    <th>Descriptive Title</th>
                                    <th>Lec</th>
                                    <th>Lab</th>
                                    <th>Total Units</th>
                                    <th>Hours per week</th>
                                    <th>Options</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>ITE-325</td>
                                    <td>Pagbasa at Pagsusuri ng Iba't Ibang Teksto Tungo sa Pananaliksik (SHS) </td>
                                    <td>6</td>
                                    <td>0</td>
                                    <td>6</td>
                                    <td>24</td>
                                    <td class="text-center"><a class="fa-solid fa-trash"></a> | <a
                                            class="fa-solid fa-pen-to-square"></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>
<script src="../../Scripts/script.js"></script>

</html>