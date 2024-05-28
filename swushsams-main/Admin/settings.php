<?php 
include_once '../includes/cdn.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
</head>
  <body>      
    <div class="wrapper">
              <?php include '../Admin/includes/sidebar.php';?>
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
                <div class="container-fluid ">
                          
                </div>
            </main>
        </div>
    </div>
            <script src="../Scripts/barchart.js"></script>
  </body>
</html>