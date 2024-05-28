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

            <main class="content m-5">
                <div class="row gutters-sm">
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex flex-column align-items-center text-center mt-4 mb-4">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                                    <div class="mt-3">
                                        <h4>Lemuel Gabutero</h4>
                                        <p class="text-secondary mb-1">Teacher</p>
                                        <p class="text-muted font-size-sm">Urgello, Cebu City, Philippines</p>
                                        <!--<button class="btn btn-primary">Follow</button>
                                        <button class="btn btn-outline-primary">Message</button>-->
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-8">
                        <div class="card mb-3">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Full Name</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        Lemuel Gabutero
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Email</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        lemuel@email.com
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Phone</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        +69300000000
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Mobile</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        +69300000000
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Address</h6>
                                    </div>
                                    <div class="col-sm-9 text-secondary">
                                        Urgello, Cebu City, Philippines
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <a class="btn btn-info " target="__blank">Edit</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--div class="row">
                        <div class="card mx-2">
                            <div class="col-md-12 my-3">
                                <iframe src="https://calendar.google.com/calendar/embed?src=glemuelaaaa%40gmail.com&ctz=Asia%2FManila" style="border: 1" width="100%" height="600" frameborder="0" scrolling="no"></iframe>
                            </div>
                        </div>
                    </div-->

                    <div class="card m-1">
                        <h2 class="text-left mt-2" style="color: maroon;">Teacher's Schedule</h2>
                        <div class="table-responsive">
                            <table id="example" style="width:100%" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th>Subjects</th>
                                        <th>Monday</th>
                                        <th>Tuesday</th>
                                        <th>Wednesday</th>
                                        <th>Thursday</th>
                                        <th>Friday</th>
                                        <!-- Add more columns for additional days if needed -->
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Math</td>
                                        <td>8:00 AM - 9:00 AM</td>
                                        <td>8:00 AM - 9:00 AM</td>
                                        <td>Off</td>
                                        <td>8:00 AM - 9:00 AM</td>
                                        <td>Off</td>
                                    </tr>
                                    <tr>
                                        <td>Science</td>
                                        <td>9:30 AM - 10:30 AM</td>
                                        <td>9:30 AM - 10:30 AM</td>
                                        <td>Off</td>
                                        <td>9:30 AM - 10:30 AM</td>
                                        <td>Off</td>
                                    </tr>
                                    <tr>
                                        <td>English</td>
                                        <td>10:00 AM - 11:00 AM</td>
                                        <td>10:00 AM - 11:00 AM</td>
                                        <td>Off</td>
                                        <td>10:00 AM - 11:00 AM</td>
                                        <td>Off</td>
                                    </tr>
                                    <tr>
                                        <td>History</td>
                                        <td>11:30 AM - 12:30 PM</td>
                                        <td>11:30 AM - 12:30 PM</td>
                                        <td>Off</td>
                                        <td>11:30 AM - 12:30 PM</td>
                                        <td>Off</td>
                                    </tr>
                                    <tr>
                                        <td>Art</td>
                                        <td>1:00 PM - 2:00 PM</td>
                                        <td>1:00 PM - 2:00 PM</td>
                                        <td>Off</td>
                                        <td>1:00 PM - 2:00 PM</td>
                                        <td>Off</td>
                                    </tr>
                                    <tr>
                                        <td>Music</td>
                                        <td>2:30 PM - 3:30 PM</td>
                                        <td>2:30 PM - 3:30 PM</td>
                                        <td>Off</td>
                                        <td>2:30 PM - 3:30 PM</td>
                                        <td>Off</td>
                                    </tr>
                                    <!-- Add more rows for additional subjects -->
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>







            </main>




        </div><!-- main -->
    </div><!-- wrapper -->


</body>



</html>