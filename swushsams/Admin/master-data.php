<?php
include_once '../includes/cdn.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Master Data</title>
</head>

<body>
    <div class="wrapper">
        <?php include '../Admin/includes/sidebar.php'; ?>
        <div class="main">
            <nav class="navbar custom-toggler navbar-expand-lg px-3 border-bottom">
                <button class="btn" id="sidebar-toggle" type="button">
                    <span class="navbar-toggler-icon "></span>
                </button>
                <div class="navbar-collapse navbar p-0 d-flex justify-content-end align-items-center">
                    <span>Welcome back <b>Lemuel</b>!</span>
                    <a href="#" class="las la-user-circle ps-2"></a>
                </div>
            </nav>

            <main class="content px-3 py-2 ">
                <div class="card rounded shadow border-0">
                    <div class="card-body p-5 bg-white rounded">
                        <div class="text-left d-flex justify-content-between">
                            <h2 style="color: maroon;">Master Data</h2>
                            <div style="color: inherit;">

                                <!-- Apply color: inherit to prevent inheriting the color -->
                                <a href="#" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#adduserModal">
                                    <i class="fa-solid fa-user-plus"></i> <span>Add New User</span>
                                </a>

                                <!-- Modal for add user -->
                                <div class="modal fade" id="adduserModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Add New User Form</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <!-- Modal body content -->


                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
                                                    <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                                </div>

                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-key"></i></span>
                                                    <input type="text" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
                                                </div>

                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="basic-addon1"><i class="fa-regular fa-address-card"></i></span>
                                                    <input type="text" class="form-control" placeholder="Name" aria-label="Name" aria-describedby="basic-addon1">
                                                </div>

                                                <div class="input-group mb-3">
                                                    <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-list-ol"></i></span>
                                                    <input type="text" class="form-control" placeholder="Employee ID" aria-label="Employee ID" aria-describedby="basic-addon1">
                                                </div>

                                                <label for="role">Role</label>
                                                <select id="role" class="form-select" aria-label="Role">
                                                    <option value="1">Admin</option>
                                                    <option value="2">Teacher</option>
                                                </select>
                                            </div>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                <button type="button" class="btn btn-primary">Add User</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>




                        <div class="table-responsive">

                            <table id="example" style="width:100%" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th class="dt-head-left">Employee ID</th>
                                        <th>Role</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><i class="fa-solid fa-user"></i><Span> Tiger Nixon</Span></td>
                                        <td class="dt-body-left">68</td>
                                        <td>Admin</td>
                                        <td>Active</td>

                                        <td><a href="profile.php" class="view-link">View</a></td>
                                        <!-- Modal
                                        <div class="modal fade" id="profileModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-xl">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Profile</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <?/*php
                                                        include_once '../includes/profile.php'; */ ?>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    </div>
                                                </div>
                                            </div>

                                        </div> -->

                                    </tr>



                                </tbody>
                            </table>

                        </div>

                        <div class="d-flex justify-content-end gap-2 mt-2">
                            <a href="#" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#importModal">
                                <i class="fa-solid fa-file-import"></i> <span>Import Data</span>
                            </a>

                            <!-- Modal for import data -->
                            <!-- Modal -->
                            <div class="modal fade" id="importModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Import User Data</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="mb-3">
                                                <label for="formFileMultiple" class="form-label">Excel/JSON</label>
                                                <input class="form-control" type="file" id="formFileMultiple" multiple>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <a href="#" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#exportModal">
                                <i class="fa-solid fa-file-export"></i> <span>Export Data</span>
                            </a>

                            <!-- Modal for Export Data -->
                            <div class="modal fade" id="exportModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Export Master Data</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <label for="role">Export As</label>
                                            <select id="role" class="form-select" aria-label="Role">
                                                <option value="1">Excel File</option>
                                                <option value="2">PDF</option>
                                            </select>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </main>
        </div>
    </div>
    <script src="../Scripts/barchart.js"></script>
    <script>
        $(function() {
            $(document).ready(function() {
                $('#example').DataTable();
            });
        });
    </script>
</body>

</html>