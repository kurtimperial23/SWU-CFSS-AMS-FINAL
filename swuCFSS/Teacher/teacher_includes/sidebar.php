<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>

<aside id="sidebar" class="js-sidebar">
    <!-- Content For Sidebar -->
    <div class="h-100 sidebar-background">
        <div class="sidebar-logo">
            <a href="#">Logo</a>
        </div>
        <ul class="sidebar-nav">
            <li class="sidebar-header">
                Faculty
            </li>
            <li class="sidebar-item">
                <a href="../Features/teacher.php"
                    class="sidebar-link <?php if ($current_page == 'teacher.php')
                        echo 'active'; ?>">
                    <i class="fa-solid fa-list pe-2"></i>
                    Dashboard
                </a>
            </li>
            <li class="sidebar-item">
                <a href="../Features/profile.php"
                    class="sidebar-link <?php if ($current_page == 'profile.php')
                        echo 'active'; ?>">
                    <i class="fas fa-user-alt"></i>
                    Profile
                </a>
            </li>
            <li class="sidebar-header">
                Others
            </li>
        </ul>
        <ul class="sidebar-nav mt-auto">
            <li class="sidebar-item">
                <a href="#" class="sidebar-link" data-bs-toggle="modal" data-bs-target="#logoutModal">
                    <i class="fas fa-sign-out-alt"></i>
                    Logout
                </a>
            </li>
        </ul>
    </div>
</aside>