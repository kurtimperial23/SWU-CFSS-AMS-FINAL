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
                Admin Elements
            </li>
            <li class="sidebar-item">
                <a href="./dashboard.php" class="sidebar-link <?php if ($current_page == 'dashboard.php' && !$isCoordinator)
                    echo 'active'; ?>">
                    <i class="fa-solid fa-list pe-2"></i>
                    Dashboard
                </a>
            </li>
            <li class="sidebar-item <?php if ($isCoordinator)
                echo 'd-none'; ?>">
                <a href="#" class="sidebar-link " data-bs-toggle="collapse" data-bs-target="#pages" aria-expanded="<?php if ($current_page == 'rooms.php' || $current_page == 'subject.php' || $current_page == 'curriculum.php' || $current_page == 'calendar.php' || $current_page == 'schoolYear.php')
                    echo 'true';
                else
                    echo 'false'; ?>">
                    <i class="fa-solid fa-file-lines pe-2"></i>
                    Curriculum
                </a>
                <ul id="pages" class="sidebar-dropdown list-unstyled collapse <?php if ($current_page == 'rooms.php' || $current_page == 'subject.php' || $current_page == 'curriculum.php' || $current_page == 'calendar.php' || $current_page == 'schoolYear.php')
                    echo 'show'; ?>">
                    <li class="sidebar-item">
                        <a href="../Features/schoolYear.php" class="sidebar-link sidebar-link-child <?php if ($current_page == 'schoolYear.php')
                            echo 'active'; ?>">School
                            Year</a>
                    </li>
                    <li class="sidebar-item">
                        <a href="../Features/curriculum.php" class="sidebar-link sidebar-link-child <?php if ($current_page == 'curriculum.php')
                            echo 'active'; ?>">Curriculum</a>
                    </li>
                    <li class="sidebar-item">
                        <a href="../Features/rooms.php" class="sidebar-link sidebar-link-child <?php if ($current_page == 'rooms.php')
                            echo 'active'; ?>">Rooms</a>
                    </li>
                    <li class="sidebar-item">
                        <a href="../Features/subject.php" class="sidebar-link sidebar-link-child <?php if ($current_page == 'subject.php')
                            echo 'active'; ?>">Subjects</a>
                    </li>
                    <li class="sidebar-item">
                        <a href="../Features/calendar.php" class="sidebar-link sidebar-link-child <?php if ($current_page == 'calendar.php')
                            echo 'active'; ?>">Calendar</a>
                    </li>
                </ul>
            </li>
            <li class="sidebar-item">
                <a href="#" class="sidebar-link" data-bs-toggle="collapse" data-bs-target="#posts" aria-expanded="<?php if ($current_page == 'faculty.php')
                    echo 'true';
                else
                    echo 'false'; ?>">
                    <i class="fa-regular fa-user pe-2"></i>
                    Staff
                </a>
                <ul id="posts" class="sidebar-dropdown list-unstyled collapse <?php if ($current_page == 'faculty.php')
                    echo 'show'; ?>">
                    <li class="sidebar-item">
                        <a href="../Features/faculty.php" class="sidebar-link sidebar-link-child <?php if ($current_page == 'faculty.php')
                            echo 'active'; ?>">Faculty</a>
                    </li>
                </ul>
            </li>
            <li class="sidebar-item <?php if ($isCoordinator)
                echo 'd-none'; ?>">
                <a href="#" class="sidebar-link " data-bs-toggle="collapse" data-bs-target="#auth" aria-expanded="<?php if ($current_page == 'subjectBudget.php' || $current_page == 'loadScheduling.php' || $current_page == 'facultyLoading.php' || $current_page == 'roomAssignment.php')
                    echo 'true';
                else
                    echo 'false'; ?>">
                    <i class="fa-solid fa-sliders pe-2"></i>
                    Timetable Generation
                </a>
                <ul id="auth" class="sidebar-dropdown list-unstyled collapse <?php if ($current_page == 'subjectBudget.php' || $current_page == 'loadScheduling.php' || $current_page == 'facultyLoading.php' || $current_page == 'roomAssignment.php')
                    echo 'show'; ?>">
                    <li class="sidebar-item">
                        <a href="../Features/subjectBudget.php" class="sidebar-link sidebar-link-child <?php if ($current_page == 'subjectBudget.php')
                            echo 'active'; ?>">Subject
                            Budget</a>
                    </li>
                    <li class="sidebar-item">
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
                    </li>
                </ul>
            </li>
            <li class="sidebar-header">
                Others
            </li>
        </ul>
        <ul class="sidebar-nav mt-auto">
            <li class="sidebar-item">
                <a href="../Features/admin_profile.php" class="sidebar-link <?php if ($current_page == 'admin_profile.php')
                            echo 'active'; ?>"><i class="fa-solid fa-user"></i>Profile</a>
            </li>
            <li class="sidebar-item">
                <a href="#" class="sidebar-link" data-bs-toggle="modal" data-bs-target="#logoutModal">
                    <i class="fas fa-sign-out-alt"></i>
                    Logout
                </a>
            </li>

        </ul>
    </div>
</aside>
<script>
document.addEventListener("DOMContentLoaded", function() {
    var sidebarItems = document.querySelectorAll('.sidebar-item');

    sidebarItems.forEach(function(item) {
        var collapseTrigger = item.querySelector('.sidebar-link[data-bs-toggle="collapse"]');
        if (collapseTrigger) {
            collapseTrigger.addEventListener('click', function() {
                var target = document.querySelector(this.getAttribute('data-bs-target'));
                if (!target.classList.contains('show')) {
                    var openSections = document.querySelectorAll('.sidebar-dropdown.show');
                    openSections.forEach(function(section) {
                        if (section !== target) {
                            section.classList.remove('show');
                        }
                    });
                }
            });
        }
    });
});
</script>