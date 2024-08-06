<?php
require_once '../includes/cdn.php'; ?>

<aside id="sidebar" class="js-sidebar">
    <!-- Content For Sidebar -->
    <div class="h-100 sidebar-background">
        <div class="sidebar-logo">
            <a href="#">SWU-SHS AMS</a>
        </div>
        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Admin Tools
            </li>

            <li class="sidebar-item d-flex align-items-center <?php echo (strpos($_SERVER['REQUEST_URI'], 'dashboard.php') !== false) ? 'active' : ''; ?>">
                <a href="./dashboard.php" class="sidebar-link">
                    <i class="fa-solid fa-chart-line"></i>
                    Dashboard
                </a>
            </li>


            <li class="sidebar-item <?php echo (strpos($_SERVER['REQUEST_URI'], 'attendance.php') !== false) ? 'active' : ''; ?>">
                <a href="#" class="sidebar-link" data-bs-toggle="collapse" data-bs-target="#auth" aria-expanded="<?php echo (in_array($current_page, ['attendance.php', 'loadScheduling.php', 'facultyLoading.php', 'roomAssignment.php', 'attendance.php'])) ? 'true' : 'false'; ?>">
                    <i class="fa-solid fa-clipboard-user"></i>
                    Attendance
                </a>
                <ul id="auth" class="sidebar-dropdown list-unstyled collapse <?php echo (in_array($current_page, ['attendance.php', 'loadScheduling.php', 'facultyLoading.php', 'roomAssignment.php', 'attendance.php'])) ? 'show' : ''; ?>">
                    <li class="sidebar-item">
                        <a href="./aft.php" class="sidebar-link sidebar-link-child <?php echo ($current_page == 'aft.php') ? 'active' : ''; ?>">Attendance For Today</a>
                    </li>
                    <li class="sidebar-item">
                        <a href="./afw.php" class="sidebar-link sidebar-link-child <?php echo ($current_page == 'afw.php') ? 'active' : ''; ?>">Attendance Report - Weekly</a>
                    </li>
                    <li class="sidebar-item">
                        <a href="./afm.php" class="sidebar-link sidebar-link-child <?php echo ($current_page == 'afm.php') ? 'active' : ''; ?>">Attendance Report - Monthly</a>
                    </li>
                </ul>
            </li>



            <li class="sidebar-item d-flex align-items-center <?php echo (strpos($_SERVER['REQUEST_URI'], 'leaves.php') !== false) ? 'active' : ''; ?>"> <a href="./leaves.php" class="sidebar-link">
                    <i class="fa-solid fa-person-running"></i>
                    Leave Monitoring
                </a>
            </li>
            <li class="sidebar-item d-flex align-items-center <?php echo (strpos($_SERVER['REQUEST_URI'], 'master-data.php') !== false) ? 'active' : ''; ?>"> <a href="./master-data.php" class="sidebar-link">
                    <i class="fa-solid fa-users-gear"></i>
                    Master Data
                </a>
            </li>
            <li class="sidebar-item d-flex align-items-center <?php echo (strpos($_SERVER['REQUEST_URI'], 'settings.php') !== false) ? 'active' : ''; ?>"> <a href="./settings.php" class="sidebar-link">
                    <i class="fa-solid fa-gear"></i> Settings
                </a>
            </li>
            <!--  <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed" data-bs-target="#pages" data-bs-toggle="collapse"
                            aria-expanded="false"><i class="fa-solid fa-file-lines pe-2"></i>
                            Curriculum
                        </a>
                        <ul id="pages" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="./Features/schoolyear.php" class="sidebar-link sidebar-link-child">School Years</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="./Features/subjectbudget.php" class="sidebar-link sidebar-link-child">Subject Budget</a>
                            </li>
                        </ul>
                    </li>-->

            <li class="sidebar-header">
                Session
            </li>

            <li class="sidebar-item">
                <a href="../index.php" class="sidebar-link">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    Logout
                </a>
            </li>
        </ul>
    </div>
</aside>







<!-- this is a snippet code from kurt's side bar to make the dropdown work like a charm. fucking goat kurt :D -->
<!--li class="sidebar-item">
                        <a href="../Features/loadScheduling.php" class="sidebar-link sidebar-link-child <?php if ($current_page == 'loadScheduling.php')
                                                                                                            echo 'active'; ?>">Load
                            Scheduling</a>
                    </li>
                    <li class="sidebar-item">
                        <a href="../Features/facultyLoading.php" class="sidebar-link sidebar-link-child <?php if ($current_page == 'facultyLoading.php')
                                                                                                            echo 'active'; ?>">Faculty
                            Loading</a>
                    </li>
                    <li class="sidebar-item">
                        <a href="../Features/roomAssignment.php" class="sidebar-link sidebar-link-child <?php if ($current_page == 'roomAssignment.php')
                                                                                                            echo 'active'; ?>">Room
                            Assignment</a>
</li-->