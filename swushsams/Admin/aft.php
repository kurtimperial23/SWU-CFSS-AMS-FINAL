<?php
include_once '../includes/cdn.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attendance Page</title>
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
                        <h2 class="text-left" style="color: maroon;">Attendance List for Today</h2>
                        <div class="table-responsive">
                            <table id="example" style="width:100%" class="table table-striped table-bordered">
                                <<thead>
                                    <tr>
                                        <th>Name</th>
                                        <th class="dt-head-left">Employee ID</th>
                                        <th>Login Time</th>
                                        <th>Logout Time</th>
                                        <th>Profile</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><i class="fa-solid fa-user"></i><Span> Tiger Nixon</Span></td>
                                            <td class="dt-body-left">684564531</td>
                                            <td>7:00 am</td>
                                            <td>6:00 pm</td>

                                            <td><a href="profile.php" class="view-link">View</a></td>
                                            <!--<td><a href="#" class="view-link" data-bs-toggle="modal" data-bs-target="#profileModal">View</a></td-->
                                            <!-- Modal -->
                                            <div class="modal fade" id="profileModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog modal-xl">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Profile</h1>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <?/*php
                                                        include_once '../includes/profile.php';*/ ?>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </tr>


                                    </tbody>
                            </table>

                            <a href="#" class="btn btn-secondary float-end mt-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <i class="fa-solid fa-gears"></i> <span>Generate Attendance Report</span>
                            </a>

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

                                    </div>
                                </div>
                            </div>
                        </div>






                        <script>
                            $(document).ready(function() {
                                // Function to show/hide date picker based on selected option
                                $('#dataType').change(function() {
                                    var selectedOption = $(this).val();
                                    if (selectedOption === 'custom') {
                                        $('#datePickerWrapper').show();
                                    } else {
                                        $('#datePickerWrapper').hide();
                                    }
                                });

                                // Initialize date range picker
                                $('input[name="daterange"]').daterangepicker({
                                    opens: 'left',
                                    startDate: moment().startOf('year'), // Set start date to beginning of current year
                                    endDate: moment(), // Set end date to current date
                                    locale: {
                                        format: 'YYYY-MM-DD'
                                    }
                                }, function(start, end, label) {
                                    console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
                                });
                            });
                        </script>
                    </div>


                </div>
        </div>
    </div>
    </div>


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
    <script>
        $(function() {
            $(document).ready(function() {
                $('#example2').DataTble(); //add "a" on DataTble to make it work again :)
            });
        });
    </script>
    <script>
        $(function() {
            $(document).ready(function() {
                $('#example3').DataTble(); //add "a" on DataTble to make it work again :)
            });
        });
    </script>
</body>

</html>