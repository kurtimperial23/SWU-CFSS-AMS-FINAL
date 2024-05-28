<?php
include_once '../includes/cdn.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance Summary</title>
</head>

<body>

    <div class="wrapper">
        <?php include '../Teacher/sidebar.php'; ?>
        <div class="main">
            <nav class="navbar custom-toggler navbar-expand-lg px-3 border-bottom">
                <button class="btn" id="sidebar-toggle" type="button">
                    <span class="navbar-toggler-icon "></span>
                </button>
                <div class="navbar-collapse navbar p-0 d-flex justify-content-end align-items-center">
                    <span>Welcome back <b>Teacher</b>!</span>
                    <a href="#" class="las la-user-circle ps-2"></a>
                </div>
            </nav>

            <main class="content px-3 py-2 ">
                <div class="card rounded shadow border-0">
                    <div class="card-body p-5 bg-white rounded">
                        <h2 class="text-left" style="color: maroon;">Attendance Report for Today</h2>
                        <div class="table-responsive">
                            <table id="example" style="width:100%" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th class="dt-head-left">Date</th>
                                        <th>Login Time</th>
                                        <th>Logout Time</th>
                                        <th>Attendance Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="dt-body-left">April 10, 2024</td>
                                        <td>7:00 am</td>
                                        <td>6:00 pm</td>
                                        <td><a class="text-success">PRESENT</a></td>

                                    </tr>


                                </tbody>
                            </table>

                            <!-- Button trigger modal
                            <a href="#" class="btn btn-secondary float-end mt-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <i class="fa-solid fa-gears"></i> <span>Generate Attendance Report</span>
                            </a> -->

                            <!-- Modal
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Generate Attendance Report</h1>
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
                        </div>-->

                            <h2 class="text-left" style="color: maroon;">Attendance Report - Weekly</h2>
                            <div class="table-responsive">
                                <table id="example2" style="width:100%" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Category</th>
                                            <th>Specifics</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Week Start Date</td>
                                            <td>April 1, 2024</td>
                                        </tr>
                                        <tr>
                                            <td>Week End Date</td>
                                            <td>April 7, 2024</td>
                                        </tr>
                                        <tr>
                                            <td>Total Workdays</td>
                                            <td>5</td>
                                        </tr>
                                        <tr>
                                            <td>Average Attendance Rate (%)</td>
                                            <td>100</td>
                                        </tr>
                                        <tr>
                                            <td>Total Absences</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>Total Late Arrivals</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td>Total Overtime Hours</td>
                                            <td>100</td>
                                        </tr>
                                        <!-- Add more rows for additional categories -->
                                    </tbody>
                                </table>

                                <!-- Button trigger modal
                                <a href="#" class="btn btn-secondary float-end mt-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <i class="fa-solid fa-gears"></i> <span>Generate Attendance Report</span>
                                </a> -->

                                <!-- Modal
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Generate Attendance Report</h1>
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
                            </div> -->



                                <h2 class="text-left" style="color: maroon;">Attendance Report - Monthly</h2>
                                <div class="table-responsive">
                                    <table id="example3" style="width:100%" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Category</th>
                                                <th>Specifics</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Total Workdays</td>
                                                <td>20</td>
                                            </tr>

                                            <tr>
                                                <td>Average Attendance Rate (%)</td>
                                                <td>90</td>
                                            </tr>
                                            <tr>
                                                <td>Total Absences</td>
                                                <td>200</td>
                                            </tr>
                                            <tr>
                                                <td>Total Late Arrivals</td>
                                                <td>100</td>
                                            </tr>
                                            <tr>
                                                <td>Total Overtime Hours</td>
                                                <td>500</td>
                                            </tr>
                                            <!-- Add more rows for additional categories -->
                                        </tbody>
                                    </table>

                                    <!-- Button trigger modal 
                                    <a href="#" class="btn btn-secondary float-end mt-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                        <i class="fa-solid fa-gears"></i> <span>Generate Attendance Report</span>
                                    </a> -->

                                    <!-- Modal 
                                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Generate Attendance Report</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>

                                                <div class="modal-body">
                                                    <label for="role">Export As</label>
                                                    <select id="role" class="form-select" aria-label="Role">
                                                        <option value="1">Excel File</option>
                                                        <option value="2">PDF</option>
                                                    </select>
                                                    <label for="role" class="mtgit -2">Data to Generate</label>
                                                    <select id="role" class="form-select" aria-label="Role">
                                                        <option value="1">Daily Attendance</option>
                                                        <option value="2">Weekly Attendance</option>
                                                        <option value="3">Monthly Attendance</option>
                                                    </select>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script src="../Scripts/barchart.js"></script>
</body>

</html>