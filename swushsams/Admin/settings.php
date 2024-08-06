<?php
include_once '../includes/cdn.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Settings</title>
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
                            <div class="card chart-option m-2 p-3" id="barcharts">
                                <div class="card-body text-center">
                                    <i class="fa fa-bar-chart fa-2x"></i>
                                    <h5 class="card-title mt-2">Bar Charts</h5>
                                </div>
                            </div>
                            <div class="card chart-option m-2 p-3" id="linecharts">
                                <div class="card-body text-center">
                                    <i class="fa fa-line-chart fa-2x"></i>
                                    <h5 class="card-title mt-2">Line Charts</h5>
                                </div>
                            </div>
                            <div class="card chart-option m-2 p-3" id="areacharts">
                                <div class="card-body text-center">
                                    <i class="fa fa-area-chart fa-2x"></i>
                                    <h5 class="card-title mt-2">Area Charts</h5>
                                </div>
                            </div>
                            <div class="card chart-option m-2 p-3" id="scales">
                                <div class="card-body text-center">
                                    <i class="fa fa-balance-scale fa-2x"></i>
                                    <h5 class="card-title mt-2">Scales</h5>
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
</body>

</html>