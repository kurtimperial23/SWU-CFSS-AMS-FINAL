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
if ($_SESSION["user_role"] != "superAdmin") {
    // Redirect back to the login page with an error message
    header("Location: ../../Process/authorization_error.php");
    exit();
}

error_reporting(E_ALL);
ini_set('display_errors', 1);

// Include the file containing the database connection code
include "../../Process/db_connection.php";

// Fetch all admins from the database using prepared statement
$stmt = $conn->prepare("SELECT first_name, id, last_name, role, contact_number, username FROM tbl_users WHERE role = ?");
$role = "admin";
$stmt->bind_param("s", $role);
$stmt->execute();
$result = $stmt->get_result();


// Error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Admins</title>

    <link rel="stylesheet" href="../../Styles/styles.css">
    <script src="../../Scripts/script.js"></script>
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
                <?php include ('../../Admin/modals/logoutModal.php'); ?>
                <!-- Modal -->
                <div class="modal fade" id="confirmDeleteModal" tabindex="-1" aria-labelledby="confirmDeleteModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="confirmDeleteModalLabel">Confirm Deletion</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Are you sure you want to delete this admin?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-danger" id="confirmDelete">Delete</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="editAdminModal" tabindex="-1" aria-labelledby="editAdminModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editAdminModalLabel">Edit Admin</h5>
                            </div>
                            <div class="modal-body">
                                <form id="editAdminForm" method="post" action="../Process/edit_admin.php">
                                    <!-- Add a hidden input field to store the admin ID -->
                                    <input type="hidden" id="adminId" name="adminId">
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label for="firstname" class="form-label">First Name</label>
                                            <input type="text" class="form-control" id="editfirstname" name="firstname"
                                                required>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="lastname" class="form-label">Last Name</label>
                                            <input type="text" class="form-control" id="editlastname" name="lastname"
                                                required>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label for="username" class="form-label">Username</label>
                                            <input type="text" class="form-control" id="editusername" name="username"
                                                placeholder="e.g. arbiter2567" required>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label for="contactNumber" class="form-label">Contact Number</label>
                                            <input type="number" class="form-control" id="editcontactNumber"
                                                name="contactNumber" maxlength="11" placeholder="e.g. 09683171436"
                                                required>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Cancel</button>
                                <!-- Remove the 'submit' attribute from the button and add an onclick event to trigger form submission -->
                                <button type="button" class="btn btn-primary" onclick="saveChangesBtn()"
                                    id="saveChangesBtn">Save Changes</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ENDS HERE -->
                <div class="card border-0">
                    <div class="card-header">
                        <h5 class="card-title  m-0">
                            Subjects
                        </h5>
                    </div>
                    <div class="card-body">
                        <table id="myTable" class="table table-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Username</th>
                                    <th>Fullname</th>
                                    <th>Role</th>
                                    <th>Contact Number</th>
                                    <th>Status</th>
                                    <th class="text-center">Options</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($row = $result->fetch_assoc()) {
                                    echo "<tr class='align-middle'>";
                                    echo "<td>" . $row['username'] . "</td>";
                                    echo "<td>" . $row['first_name'] . " " . $row['last_name'] . "</td>";
                                    echo "<td>" . $row['role'] . "</td>";
                                    echo "<td>" . $row['contact_number'] . "</td>";
                                    echo "<td>";
                                    echo "<select class='form-select form-select-sm' aria-label='Enable / Disabled'>";
                                    echo "<option selected value='1'>Enabled</option>";
                                    echo "<option value='0'>Disabled</option>";
                                    echo "</select>";
                                    echo "</td>";
                                    echo "<td class='text-center'>";
                                    echo "<a href='#' class='btn btn-danger btn-sm delete-btn' data-username='" . $row['username'] . "'><i class='fa-solid fa-trash'></i></a> ";
                                    echo "<a href='#' class='btn btn-primary btn-sm edit-btn' data-userid='" . $row['id'] . "'><i class='fa-solid fa-pen-to-square'></i></a>";
                                    echo "</td>";
                                    echo "</tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>

            </main>
        </div>
</body>
<script>
$(document).ready(function() {
    $('.delete-btn').click(function() {
        var username = $(this).data('username');
        $('#confirmDeleteModal').modal('show');
        $('#confirmDelete').click(function() {
            $.ajax({
                url: '../Process/delete_admin.php',
                type: 'post',
                data: {
                    username: username
                }, // Send username instead of id
                success: function(response) {
                    window.location
                        .reload(); // Reload the page after successful deletion
                }
            });
        });
    });

    // Function to handle edit button click
    $('.edit-btn').click(function() {
        var adminId = $(this).data('userid');
        // Fetch admin details via AJAX and populate the modal fields
        $.ajax({
            url: '../Process/fetch_admin.php',
            type: 'post',
            data: {
                adminId: adminId
            },
            success: function(response) {
                var admin = JSON.parse(response);
                $('#adminId').val(admin.id);
                $('#editfirstname').val(admin.first_name);
                $('#editlastname').val(admin.last_name);
                $('#editusername').val(admin.username);
                $('#editcontactNumber').val(admin.contact_number);
                $('#editAdminModal').modal('show');
            }
        });
    });

    // Function to handle save changes button click
    $('#saveChangesBtn').click(function() {
        // Serialize form data
        var formData = $('#editAdminForm').serialize();
        // Submit form data via AJAX
        $.ajax({
            url: '../Process/edit_admin.php',
            type: 'post',
            data: formData,
            success: function(response) {
                // Reload the page after successful update
                window.location.reload();
            }
        });
    });

});
</script>

</html>