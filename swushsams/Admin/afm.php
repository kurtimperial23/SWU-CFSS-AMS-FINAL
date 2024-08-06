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
                        <div class="table-responsive">

                            <h2 class="text-left" style="color: maroon;">Attendance Report - Monthly</h2>
                            <div class="table-responsive">
                                <table id="example3" style="width:100%" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Category</th>
                                            <th>Value</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Total Workdays</td>
                                            <td>20</td>
                                        </tr>
                                        <tr>
                                            <td>Total Employees</td>
                                            <td>36</td>
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

                                <!-- Button trigger modal -->
                                <a href="#" class="btn btn-secondary float-end mt-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <i class="fa-solid fa-gears"></i> <span>Generate Attendance Report</span>
                                </a>

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Generate Attendance Report</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>

                                            <div class="modal-body">
                                                <label for="exportType">Export As</label>
                                                <select id="exportType" class="form-select" aria-label="Export Type">
                                                    <option value="excel">Excel File</option>
                                                    <option value="pdf">PDF</option>
                                                </select>
                                                <label for="dataType" class="mt-2">Data to Generate</label>
                                                <select id="dataType" class="form-select" aria-label="Data Type">
                                                    <option value="daily">Daily Attendance</option>
                                                    <option value="weekly">Weekly Attendance</option>
                                                    <option value="monthly">Monthly Attendance</option>
                                                    <option value="custom">Custom</option>
                                                </select>

                                                <div id="datePickerWrapper" style="display: none;">
                                                    <label for="daterange" class="mt-2">Select Date Range</label>
                                                    <input type="text" id="daterange" name="daterange" class="form-control" />
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