<?php
include_once '../includes/cdn.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schedules</title>
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
                <!------------------------------------------------------------------------------------------------------------------------------------------------------------------->

                <div class="card rounded shadow border-0">
                    <div class="card-body p-5 bg-white rounded">
                        <h2 class="text-left" style="color: maroon;">Teacher's Schedule</h2>
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
                        <!----------------------------------------------------------------------------------------------------------->


                        <div class="row">
                            <div class="card rounded shadow border-0 mt-3   ">
                                <div class="col-md-12 my-3">
                                    <iframe src="https://calendar.google.com/calendar/embed?src=glemuelaaaa%40gmail.com&ctz=Asia%2FManila" style="border: 1" width="100%" height="600" frameborder="0" scrolling="no"></iframe>
                                </div>
                            </div>
                        </div>
                        <!----------------------------------------------------------------------------------------------------------->



                    </div>
                </div>
            </main>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                "order": [
                    /*  
                    
                    [0, 'asc'],
                    [1, 'asc']

                    Leave blank to default sort. A-Z 0-99999999
                    */
                ]
            });
        });
    </script>
    <!--script>
        $(function() {
            $(document).ready(function() {   //this is the old script
                $('#example').DataTable();
            });
        });
    </script-->

</body>

</html>