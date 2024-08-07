<?php include_once '../includes/cdn.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Include Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
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

            <main class="content px-3 py-2">
                <div class="card rounded shadow border-0">
                    <div class="card-body p-5 bg-white rounded">
                        <div class="text-left d-flex justify-content-between">
                            <h2 style="color: maroon;">Settings</h2>
                        </div>
                        <!-- User Customization Section -->
                        <h4 class="mt-3">User Customization</h4>
                        <div class="mb-3">
                            <label for="timezone" class="form-label">Timezone</label>
                            <select class="form-select" id="timezone">
                                <option selected>Choose...</option>
                                <option value="UTC-5">UTC-5</option>
                                <option value="UTC+1">UTC+1</option>
                                <!-- Add more timezones as needed -->
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="notifications" class="form-label">Notifications</label>
                            <select class="form-select" id="notifications">
                                <option selected>Choose...</option>
                                <option value="1">Enable</option>
                                <option value="2">Disable</option>
                            </select>
                        </div>

                        <!-- Charts in Dashboard Section -->
                        <h4 class="mt-5">Charts in Dashboard</h4>
                        <div class="d-flex flex-wrap">
                            <div class="card chart-option m-2 p-3" data-toggle="modal" data-target="#barchartModal">
                                <div class="card-body text-center">
                                    <i class="fa fa-bar-chart fa-2x"></i>
                                    <h5 class="card-title mt-2">Bar Charts</h5>
                                </div>
                            </div>
                            <div class="card chart-option m-2 p-3" data-toggle="modal" data-target="#linechartModal">
                                <div class="card-body text-center">
                                    <i class="fa fa-line-chart fa-2x"></i>
                                    <h5 class="card-title mt-2">Line Charts</h5>
                                </div>
                            </div>
                            <div class="card chart-option m-2 p-3" data-toggle="modal" data-target="#areachartModal">
                                <div class="card-body text-center">
                                    <i class="fa fa-area-chart fa-2x"></i>
                                    <h5 class="card-title mt-2">Area Charts</h5>
                                </div>
                            </div>
                            <div class="card chart-option m-2 p-3" data-toggle="modal" data-target="#scalesModal">
                                <div class="card-body text-center">
                                    <i class="fa fa-balance-scale fa-2x"></i>
                                    <h5 class="card-title mt-2">Scales</h5>
                                </div>
                            </div>
                        </div>

                        <!-- Bar Chart Modal -->
                        <div class="modal fade" id="barchartModal" tabindex="-1" role="dialog" aria-labelledby="barchartModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="barchartModalLabel">Bar Chart Settings</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form id="barchartForm">
                                            <div class="form-group">
                                                <label for="barchartData">Data Source</label>
                                                <input type="text" class="form-control" id="barchartData" placeholder="Enter data source">
                                            </div>
                                            <div class="form-group">
                                                <label for="barchartTitle">Chart Title</label>
                                                <input type="text" class="form-control" id="barchartTitle" placeholder="Enter chart title">
                                            </div>
                                            <!-- Add more input fields as needed -->
                                            <button type="submit" class="btn btn-primary">Replace</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Line Chart Modal -->
                        <div class="modal fade" id="linechartModal" tabindex="-1" role="dialog" aria-labelledby="linechartModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="linechartModalLabel">Line Chart Settings</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form id="linechartForm">
                                            <div class="form-group">
                                                <label for="linechartData">Data Source</label>
                                                <input type="text" class="form-control" id="linechartData" placeholder="Enter data source">
                                            </div>
                                            <div class="form-group">
                                                <label for="linechartTitle">Chart Title</label>
                                                <input type="text" class="form-control" id="linechartTitle" placeholder="Enter chart title">
                                            </div>
                                            <!-- Add more input fields as needed -->
                                            <button type="submit" class="btn btn-primary">Replace</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Area Chart Modal -->
                        <div class="modal fade" id="areachartModal" tabindex="-1" role="dialog" aria-labelledby="areachartModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="areachartModalLabel">Area Chart Settings</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form id="areachartForm">
                                            <div class="form-group">
                                                <label for="areachartData">Data Source</label>
                                                <input type="text" class="form-control" id="areachartData" placeholder="Enter data source">
                                            </div>
                                            <div class="form-group">
                                                <label for="areachartTitle">Chart Title</label>
                                                <input type="text" class="form-control" id="areachartTitle" placeholder="Enter chart title">
                                            </div>
                                            <!-- Add more input fields as needed -->
                                            <button type="submit" class="btn btn-primary">Replace</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Scales Modal -->
                        <div class="modal fade" id="scalesModal" tabindex="-1" role="dialog" aria-labelledby="scalesModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="scalesModalLabel">Scales Settings</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form id="scalesForm">
                                            <div class="form-group">
                                                <label for="scalesData">Data Source</label>
                                                <input type="text" class="form-control" id="scalesData" placeholder="Enter data source">
                                            </div>
                                            <div class="form-group">
                                                <label for="scalesTitle">Chart Title</label>
                                                <input type="text" class="form-control" id="scalesTitle" placeholder="Enter chart title">
                                            </div>
                                            <!-- Add more input fields as needed -->
                                            <button type="submit" class="btn btn-primary">Replace</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <!-- Admin Customization Form -->
                        <h4 class="mt-3">Admin Customization</h4>
                        <form>
                            <div class="mb-3">
                                <label for="colorTheme" class="form-label">Color Theme</label>
                                <select class="form-select" id="colorTheme">
                                    <option selected>Choose...</option>
                                    <option value="light">Light</option>
                                    <option value="dark">Dark</option>
                                    <option value="custom">Custom</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="logo" class="form-label">Logo</label>
                                <input type="file" class="form-control" id="logo">
                            </div>
                            <div class="mb-3">
                                <label for="font" class="form-label">Font</label>
                                <select class="form-select" id="font">
                                    <option selected>Choose...</option>
                                    <option value="arial">Arial</option>
                                    <option value="times">Times New Roman</option>
                                    <option value="courier">Courier New</option>
                                    <!-- Add more fonts as needed -->
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary">Save Changes</button>
                        </form>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script>
        document.querySelectorAll('.chart-option').forEach(option => {
            option.addEventListener('click', function() {
                document.querySelectorAll('.chart-option').forEach(opt => opt.classList.remove('selected'));
                this.classList.add('selected');
                // You can add more logic here to handle the selection
                // For example, updating a hidden input field with the selected value
            });
        });
    </script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        document.getElementById('barchartForm').addEventListener('submit', function(event) {
            event.preventDefault();
            const dataSource = document.getElementById('barchartData').value;
            const chartTitle = document.getElementById('barchartTitle').value;
            // Process the form data and generate the chart
            console.log('Bar Chart Data Source:', dataSource);
            console.log('Bar Chart Title:', chartTitle);
            // Close the modal
            $('#barchartModal').modal('hide');
        });

        document.getElementById('linechartForm').addEventListener('submit', function(event) {
            event.preventDefault();
            const dataSource = document.getElementById('linechartData').value;
            const chartTitle = document.getElementById('linechartTitle').value;
            // Process the form data and generate the chart
            console.log('Line Chart Data Source:', dataSource);
            console.log('Line Chart Title:', chartTitle);
            // Close the modal
            $('#linechartModal').modal('hide');
        });

        document.getElementById('areachartForm').addEventListener('submit', function(event) {
            event.preventDefault();
            const dataSource = document.getElementById('areachartData').value;
            const chartTitle = document.getElementById('areachartTitle').value;
            // Process the form data and generate the chart
            console.log('Area Chart Data Source:', dataSource);
            console.log('Area Chart Title:', chartTitle);
            // Close the modal
            $('#areachartModal').modal('hide');
        });

        document.getElementById('scalesForm').addEventListener('submit', function(event) {
            event.preventDefault();
            const dataSource = document.getElementById('scalesData').value;
            const chartTitle = document.getElementById('scalesTitle').value;
            // Process the form data and generate the chart
            console.log('Scales Data Source:', dataSource);
            console.log('Scales Title:', chartTitle);
            // Close the modal
            $('#scalesModal').modal('hide');
        });
    </script>
</body>

</html>