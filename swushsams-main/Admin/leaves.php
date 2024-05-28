<?php
include_once '../includes/cdn.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leave Management</title>
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
                        <h2 class="text-left" style="color: maroon;">Leave Management</h2>
                        <div class="table-responsive">
                            <table id="example" style="width:100%" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th class="dt-head-left">Employee ID</th>
                                        <th>Start Date</th>
                                        <th>End Date</th>
                                        <th>Leave Information</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><i class="fa-solid fa-user"></i><Span> Tiger Nixon</Span></td>
                                        <td class="dt-body-left">684564531</td>
                                        <td>February 29, 2024</td>
                                        <td>March 13, 2024</td>

                                        <td><a href="#" class="view-link" data-bs-toggle="modal" data-bs-target="#leaveModal">View</a></td>

                                        <!-- Modal -->
                                        <div class="modal fade" id="leaveModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Leave Details</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div>
                                                            <div class="container-fluid">
                                                                <div class="row h-100">
                                                                    <div class="col-md-8">
                                                                        <div>
                                                                            <h2>Employee Details</h2>
                                                                            <p><strong>Name:</strong> Tiger Nixon</p>
                                                                            <p><strong>ID:</strong> EMP-684564531</p>
                                                                            <p><strong>Department:</strong> Senior High School Faculty</p>
                                                                            <p><strong>Position:</strong> Teacher</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="h-100 d-flex align-items-center justify-content-center"> <!-- Adjusted container -->
                                                                            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="." style="max-height: 100%; max-width: 80%;">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=" row">
                                                                    <div class="col-md-12">
                                                                        <h2>Leave Details</h2>
                                                                        <p><strong>Leave Type:</strong> Annual Leave</p>
                                                                        <p><strong>Start Date:</strong> April 10, 2024</p>
                                                                        <p><strong>End Date:</strong> April 15, 2024</p>
                                                                        <p><strong>Duration:</strong> 6 days</p>
                                                                        <p><strong>Reason:</strong> Family vacation</p>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <h2>Additional Notes</h2>
                                                                        <p>The employee has been with the university for 5 years and has not taken any leave in the past 12 months.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <h2>Employee's Additional Information/Comment</h2>
                                                                        <p>Please.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary me-2" data-bs-dismiss="modal">Reject</button>
                                                            <button type="button" class="btn btn-primary">Approve</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </tr>

                                    <tr>
                                        <td><i class="fa-solid fa-user"></i><Span> Lemuel Gabutero</Span></td>
                                        <td class="dt-body-left">984564531</td>
                                        <td>February 29, 2024</td>
                                        <td>March 13, 2024</td>

                                        <td><a href="#" class="view-link" data-bs-toggle="modal" data-bs-target="#leaveModal">View</a></td>

                                        <!-- Modal -->
                                        <div class="modal fade" id="leaveModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Leave Details</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div>
                                                            <div class="container-fluid">
                                                                <div class="row h-100">
                                                                    <div class="col-md-8">
                                                                        <div>
                                                                            <h2>Employee Details</h2>
                                                                            <p><strong>Name:</strong> Tiger Nixon</p>
                                                                            <p><strong>ID:</strong> EMP-684564531</p>
                                                                            <p><strong>Department:</strong> Senior High School Faculty</p>
                                                                            <p><strong>Position:</strong> Teacher</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="h-100 d-flex align-items-center justify-content-center"> <!-- Adjusted container -->
                                                                            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="." style="max-height: 100%; max-width: 80%;">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=" row">
                                                                    <div class="col-md-12">
                                                                        <h2>Leave Details</h2>
                                                                        <p><strong>Leave Type:</strong> Annual Leave</p>
                                                                        <p><strong>Start Date:</strong> April 10, 2024</p>
                                                                        <p><strong>End Date:</strong> April 15, 2024</p>
                                                                        <p><strong>Duration:</strong> 6 days</p>
                                                                        <p><strong>Reason:</strong> Family vacation</p>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <h2>Additional Notes</h2>
                                                                        <p>The employee has been with the university for 5 years and has not taken any leave in the past 12 months.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <h2>Employee's Additional Information/Comment</h2>
                                                                        <p>Please.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary me-2" data-bs-dismiss="modal">Reject</button>
                                                            <button type="button" class="btn btn-primary">Approve</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </tr>


                                    <tr>
                                        <td><i class="fa-solid fa-user"></i><Span> Joe Rogan</Span></td>
                                        <td class="dt-body-left">784564531</td>
                                        <td>February 29, 2024</td>
                                        <td>March 13, 2024</td>

                                        <td><a href="#" class="view-link" data-bs-toggle="modal" data-bs-target="#leaveModal">View</a></td>

                                        <!-- Modal -->
                                        <div class="modal fade" id="leaveModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Leave Details</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div>
                                                            <div class="container-fluid">
                                                                <div class="row h-100">
                                                                    <div class="col-md-8">
                                                                        <div>
                                                                            <h2>Employee Details</h2>
                                                                            <p><strong>Name:</strong> Tiger Nixon</p>
                                                                            <p><strong>ID:</strong> EMP-684564531</p>
                                                                            <p><strong>Department:</strong> Senior High School Faculty</p>
                                                                            <p><strong>Position:</strong> Teacher</p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="h-100 d-flex align-items-center justify-content-center"> <!-- Adjusted container -->
                                                                            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="." style="max-height: 100%; max-width: 80%;">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class=" row">
                                                                    <div class="col-md-12">
                                                                        <h2>Leave Details</h2>
                                                                        <p><strong>Leave Type:</strong> Annual Leave</p>
                                                                        <p><strong>Start Date:</strong> April 10, 2024</p>
                                                                        <p><strong>End Date:</strong> April 15, 2024</p>
                                                                        <p><strong>Duration:</strong> 6 days</p>
                                                                        <p><strong>Reason:</strong> Family vacation</p>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <h2>Additional Notes</h2>
                                                                        <p>The employee has been with the university for 5 years and has not taken any leave in the past 12 months.</p>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <h2>Employee's Additional Information/Comment</h2>
                                                                        <p>Please.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary me-2" data-bs-dismiss="modal">Reject</button>
                                                            <button type="button" class="btn btn-primary">Approve</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
        </div>
        </main>
    </div><!-- main -->
    </div><!-- wrapper -->



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