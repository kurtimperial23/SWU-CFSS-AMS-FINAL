<?php
include_once '../includes/cdn.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile (Name)</title>
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

            <main class="content m-3 ">
                <div class="card rounded shadow border-0">
                    <div class="card-body p-3 rounded" style="background-color: #DDDDDD;">
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

                            <div class="row">
                                <div class="card mx-2">
                                    <div class="col-md-12 my-3">
                                        <div class="p-3">
                                            <div id='calendar'>
                                                <!-- Calendar Here -->
                                            </div>
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
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar/index.global.min.js'></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const calendarEl = document.getElementById('calendar');
            const calendar = new FullCalendar.Calendar(calendarEl, {
                initialView: 'dayGridMonth',
                events: generateRandomEvents()
            });
            calendar.render();
        });

        function generateRandomEvents() {
            const events = [];
            const today = new Date();
            for (let i = 0; i < 10; i++) { // Generating 10 random events
                const startDate = new Date(today.getTime() + Math.random() * 30 * 24 * 60 * 60 * 1000); // Random date within next 30 days
                const endDate = new Date(startDate.getTime() + Math.random() * 7 * 24 * 60 * 60 * 1000); // Random duration within 7 days
                events.push({
                    title: 'Event ' + (i + 1),
                    start: startDate,
                    end: endDate
                });
            }
            return events;
        }
    </script>
</body>

</html>