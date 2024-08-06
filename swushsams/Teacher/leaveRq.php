<?php
include_once '../includes/cdn.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leave Request</title>
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
                <div class="container-fluid ">
                    <div class="card rounded shadow border-0">
                        <div class="card-body p-5 bg-white rounded">
                            <div class="text-left d-flex justify-content-between">
                                <h2 style="color: maroon;">Leave Request Data</h2>
                                <div style="color: inherit;">

                                    <!-- Apply color: inherit to prevent inheriting the color -->
                                    <a href="#" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#leaveRqModal">
                                        <i class="fa-solid fa-clock-rotate-left"></i>
                                        <span>View Leave History</span>
                                    </a>

                                    <!-- Modal for add user -->
                                    <div class="modal fade" id="leaveRqModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Leave History</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">

                                                    <!--small class="card-title">Leave History</small-->
                                                    <div class="table-responsive">


                                                        <table class="table">
                                                            <thead>
                                                                <tr>
                                                                    <th>Leave Type</th>
                                                                    <th>Start Date</th>
                                                                    <th>End Date</th>
                                                                    <th>Status</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <!-- Row 1 -->
                                                                <tr>
                                                                    <td>Sick Leave</td>
                                                                    <td>2024-04-01</td>
                                                                    <td>2024-04-03</td>
                                                                    <td>Approved</td>
                                                                </tr>
                                                                <!-- Row 2 -->
                                                                <tr>
                                                                    <td>Vacation Leave</td>
                                                                    <td>2024-05-10</td>
                                                                    <td>2024-05-17</td>
                                                                    <td>Pending</td>
                                                                </tr>
                                                                <!-- Add more rows for additional leave history -->
                                                                <!-- Repeat additional rows 3 more times -->
                                                                <!-- Row 3 -->
                                                                <tr>
                                                                    <td>Personal Leave</td>
                                                                    <td>2024-06-01</td>
                                                                    <td>2024-06-03</td>
                                                                    <td>Approved</td>
                                                                </tr>
                                                                <!-- Row 4 -->
                                                                <tr>
                                                                    <td>Maternity Leave</td>
                                                                    <td>2024-07-10</td>
                                                                    <td>2024-08-10</td>
                                                                    <td>Pending</td>
                                                                </tr>
                                                                <!-- Add more rows if needed -->
                                                            </tbody>
                                                        </table>




                                                    </div>


                                                    <div class="mt-2">
                                                        <h5>Leave Summary</h5>
                                                        <p>You have <span id="remainingLeaves">10</span> days of leave remaining for this year.</p>
                                                        <p>Remember, taking breaks is essential for productivity and well-being. Enjoy your time off!</p>
                                                    </div>

                                                </div>

                                                <!--div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                    <button type="button" class="btn btn-primary">Add User</button>
                                                </div-->


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <form>
                                <div class="form-group">
                                    <label for="leaveType">Type of Leave</label>
                                    <select class="form-control" id="leaveType" required>
                                        <option value="">Select leave type</option>
                                        <option value="Sick Leave">Sick Leave</option>
                                        <option value="Vacation Leave">Vacation Leave</option>
                                        <option value="Personal Leave">Personal Leave</option>
                                        <option value="Maternity Leave">Maternity Leave</option>
                                        <option value="Paternity Leave">Paternity Leave</option>
                                        <option value="Parental Leave">Parental Leave</option>
                                        <option value="Unpaid Leave">Unpaid Leave</option>
                                        <!-- Add more leave types as needed -->
                                    </select>
                                </div>
                                <div class="form-group mt-2">
                                    <label for="startDate">Start Date</label>
                                    <input type="date" class="form-control" id="startDate" required>
                                </div>
                                <div class="form-group mt-2">
                                    <label for="endDate">End Date</label>
                                    <input type="date" class="form-control" id="endDate" required>
                                </div>
                                <div class="form-group mt-2">
                                    <label for="contactNumber">Contact Number During Leave</label>
                                    <input type="tel" class="form-control" id="contactNumber" placeholder="Enter contact number" required>
                                </div>
                                <div class="form-group mt-2">
                                    <label for="alternateContact">Alternate Contact Person</label>
                                    <input type="text" class="form-control" id="alternateContact" placeholder="Enter alternate contact person" required>
                                </div>
                                <div class="form-group mt-2">
                                    <label for="emergencyContact">Emergency Contact Person</label>
                                    <input type="text" class="form-control" id="emergencyContact" placeholder="Enter emergency contact person" required>
                                </div>
                                <div class="form-group mt-2">
                                    <label for="reason">Reason for Leave</label>
                                    <textarea class="form-control" id="reason" rows="3" required></textarea>
                                </div>
                                <!-- You can add more fields such as duration, attachment, etc. as needed -->
                                <button type="submit" class="btn btn-secondary mt-3">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
    <script src="../Scripts/barchart.js"></script>
</body>

</html>