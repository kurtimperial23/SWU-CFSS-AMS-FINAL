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
            <nav class="navbar custom-toggler navbar-expand px-3 border-bottom">
                <button class="btn" id="sidebar-toggle" type="button">
                    <span class="navbar-toggler-icon "></span>
                </button>
                <div class="navbar-collapse navbar p-0 d-flex justify-content-end align-items-center">
                    <span>Welcome back <b>Kurt</b>!</span>
                    <a href="#" class="las la-user-circle ps-2"></a>
                </div>
            </nav>

            <main class="content px-3 py-4">
                <div class="container-fluid">
                    <?php include '../../Admin/admin_includes/dashboardBanner.php'; ?>
                    <!-- SAME ROW OF DASHBOARD BANNER BUT LIKE I JUST PUT IT HERE KAY FOR EVERY PAGE LAHE LAHE -->
                    <div class="col-12 col-md-2 d-flex">
                        <div class="card flex-fill border-0">
                            <div class="card-body d-flex justify-content-center align-items-center">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#addSubjectModal">Add Subjects</button>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal -->
                <!-- subject modal -->
                <div class="modal fade" id="addSubjectModal" tabindex="-1" role="dialog"
                    aria-labelledby="addSubjectModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Add Subject</h5>
                            </div>
                            <div class="modal-body">
                                <form id="addSubjectForm">
                                    <div class="mb-3">
                                        <label for="selectSemester" class="form-label">Semester</label>
                                        <select class="form-select" id="selectSemester" name="selectSemester">
                                            <option value="">Select Semester </option>
                                            <option value="Strand 1">1st Semester</option>
                                            <option value="Strand 2">2nd Semester</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="subjectCode" class="form-label">Subject Code</label>
                                        <input type="text" class="form-control" id="subjectCode" name="subjectCode"
                                            required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="subjectDescription" class="form-label">Subject Description</label>
                                        <input type="text" class="form-control" id="subjectDescription"
                                            name="subjectDescription">
                                    </div>
                                    <div class="mb-3">
                                        <label for="creditedUnits" class="form-label">Credited Units</label>
                                        <input type="text" class="form-control" id="creditedUnits" name="creditedUnits">
                                    </div>
                                    <div class="mb-3">
                                        <label for="subjectType" class="form-label">Lec / Lab</label>
                                        <select class="form-select" id="subjectType" name="subjectType">
                                            <option value="">Select Lec / Lab</option>
                                            <option value="Strand 1">Lecture</option>
                                            <option value="Strand 2">Laboratory</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="selectGradeLevel" class="form-label">Grade Level</label>
                                        <select class="form-select" id="selectGradeLevel" name="selectGradeLevel">
                                            <option value="">Select Grade Level</option>
                                            <option value="Strand 1">11</option>
                                            <option value="Strand 2">12</option>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="strand" class="form-label">Strand</label>
                                        <select class="form-select" id="strand" name="strand">
                                            <option value="">Select Strand</option>
                                            <option value="Strand 1">Strand 1</option>
                                            <option value="Strand 2">Strand 2</option>
                                            <option value="Strand 3">Strand 3</option>
                                        </select>
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
                <!-- ENDS HERE -->
                <div class="card border-0">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h5 class="card-title m-0">Subject</h5>
                            </div>
                            <div class="col-auto">
                                <select name="semester-dropdown" id="semester-dropdown"
                                    class="form-select form-select-sm">
                                    <option value="Semester 1">Semester 1</option>
                                    <option value="Semester 2">Semester 2</option>
                                    <option value="Semester 2">Display all</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="myTable" class="table table-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Subject Code</th>
                                    <th>Subject Description</th>
                                    <th>Grade level</th>
                                    <th>Strand</th>
                                    <th>Lec / Lab</th>
                                    <th>Credited Units</th>
                                    <th>Semester</th>
                                    <th>Options</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>ITE-325</td>
                                    <td>Research Capstone</td>
                                    <td>Grade 11</td>
                                    <td>STEM - ICT</td>
                                    <td>Lec</td>
                                    <td>6</td>
                                    <td>1st semester</td>
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