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
    <title>SHS Faculty</title>

    <link rel="stylesheet" href="../../Styles/styles.css">
</head>

<body>

    <div class="wrapper">
        <?php include ('../admin_includes/sidebar.php'); ?>
        <div class="main">
            <?php include '../admin_includes/admin_nav.php' ?>

            <main class="content px-3 py-4">
                <div class="container-fluid">
                    <?php include '../../Admin/admin_includes/dashboardBanner.php'; ?>
                    <!-- SAME ROW OF DASHBOARD BANNER BUT LIKE I JUST PUT IT HERE KAY FOR EVERY PAGE LAHE LAHE -->
                    <div class="col-12 col-md-2 d-flex">
                        <div class="card flex-fill border-0">
                            <div class="card-body d-flex justify-content-center align-items-center">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#exampleModalCenter">Add Faculty</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Add Faculty</h5>
                            </div>
                            <div class="modal-body">
                                <form id="addSubjectForm">
                                    <div class="mb-1">
                                        <h5>Faculty Name</h5>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col">
                                            <label for="firstname" class="form-label">First Name</label>
                                            <input type="text" class="form-control" id="firstname" name="firstname"
                                                required>
                                        </div>
                                        <div class="col">
                                            <label for="lastname" class="form-label">Last Name</label>
                                            <input type="text" class="form-control" id="lastname" name="lastname"
                                                required>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <h5 class="form-label">Faculty Role</h5>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="probationary"
                                                        name="strand" value="Probationary">
                                                    <label class="form-check-label"
                                                        for="probationary">Probationary</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="regular"
                                                        name="strand" value="Regular">
                                                    <label class="form-check-label" for="regular">Regular</label>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="coordinator"
                                                        name="strand" value="Coordinator">
                                                    <label class="form-check-label"
                                                        for="coordinator">Coordinator</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="principal"
                                                        name="strand" value="Principal">
                                                    <label class="form-check-label" for="principal">Principal</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="employmentStatus" class="form-label">FT / PT</label>
                                        <select class="form-select" id="employmentStatus" name="employmentStatus">
                                            <option value="">FT / PT</option>
                                            <option value="FT">FT</option>
                                            <option value="PT">PT</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="prefferedSubject" class="form-label">Preferred Subjects</label>
                                        <select class="form-select" id="prefferedSubject" name="prefferedStrand">
                                            <option value="">Select Subject</option>
                                            <option value="">APP 003</option>
                                            <option value="">ITE 325</option>
                                            <option value="">can teach any subjects</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="prefferedStrand" class="form-label">Preferred Strand</label>
                                        <select class="form-select" id="prefferedStrand" name="prefferedStrand">
                                            <option value="">Select Strand</option>
                                            <option value="">APP 003</option>
                                            <option value="">ITE 325</option>
                                            <option value="">can teach any subjects</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="subjectDescription" class="form-label">Required Hours</label>
                                        <input type="number" class="form-control" id="subjectDescription"
                                            name="subjectDescription">
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary" onclick="addSubject()">Add
                                    Subject</button>
                            </div>
                        </div>
                    </div>
                </div>
                <?php include ('../modals/logoutModal.php'); ?>

                <div class="card border-0">
                    <div class="card-header">
                        <h5 class="card-title m-0">
                            Schoolyears
                        </h5>
                    </div>
                    <div class="card-body">

                        <table id="myTable" class="table table-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Faculty Role</th>
                                    <th>FT / PT</th>
                                    <th>Preferred Subjects</th>
                                    <th>Preferred Strand</th>
                                    <th>Required Hours</th>
                                    <th>Options</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Kurt Hydein</td>
                                    <td>Imperial</td>
                                    <td>Regular, Coordinator</td>
                                    <td>FT</td>
                                    <td>Physics</td>
                                    <td>STEM - HEALTH</td>
                                    <td>24</td>
                                    <td class="text-center"><a class="fa-solid fa-trash"></a> | <a
                                            class="fa-solid fa-pen-to-square"></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
        </div>
        </main>
    </div>
    </div>
</body>
<script src="../../Scripts/script.js"></script>

</html>