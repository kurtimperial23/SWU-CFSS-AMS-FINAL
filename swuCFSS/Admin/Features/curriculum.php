<?php
require_once ('../../common_includes/cdn.php');
session_start();

if (!isset($_SESSION["email"])) {
    header("Location: ../../index.php");
    exit();
}

if ($_SESSION["user_role"] != "admin") {
    header("Location: ../../common_processes/authorization_error.php");
    exit();
}

$csvAsArray = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_FILES['curriculumFile']) && $_FILES['curriculumFile']['error'] === UPLOAD_ERR_OK) {
        $tmpName = $_FILES['curriculumFile']['tmp_name'];
        $csvAsArray = array_map('str_getcsv', file($tmpName));
    } else {
        echo "Error uploading file.";
    }
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
                    <div class="col-12 col-md-2 d-flex">
                        <div class="card flex-fill border-0">
                            <div class="card-body d-flex justify-content-center align-items-center">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#uploadCurriculum">Upload Curriculum</button>
                            </div>
                        </div>
                    </div>
                </div>
                <?php include ('../modals/logoutModal.php'); ?>

                <!-- Upload Curriculum Modal -->
                <div class="modal fade" id="uploadCurriculum" tabindex="-1" aria-labelledby="uploadCurriculumLabel"
                    aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="uploadCurriculumLabel">Upload Curriculum CSV</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label for="curriculumFile" class="form-label">Choose CSV file</label>
                                        <input class="form-control" type="file" id="curriculumFile"
                                            name="curriculumFile" accept=".csv" required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Upload</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Curriculum Table -->
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
                                    <option value="All">Display all</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <?php if (!empty($csvAsArray)) { ?>
                            <table id="myTable" class="table table-hover" style="width:100%">
                                <thead>
                                    <tr>
                                        <?php
                                        // Display headers
                                        $header = array_shift($csvAsArray);
                                        foreach ($header as $col) {
                                            echo "<th>" . htmlspecialchars($col) . "</th>";
                                        }
                                        ?>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    // Display data rows
                                    foreach ($csvAsArray as $row) {
                                        echo "<tr>";
                                        foreach ($row as $cell) {
                                            echo "<td>" . htmlspecialchars($cell) . "</td>";
                                        }
                                        echo "</tr>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        <?php } else { ?>
                            <p>No curriculum data available. Please upload a CSV file.</p>
                        <?php } ?>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>
<script src="../../Scripts/script.js"></script>

</html>