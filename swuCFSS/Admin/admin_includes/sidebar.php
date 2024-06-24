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
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="icon-svg me-1">
                        <!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path
                            d="M40 48C26.7 48 16 58.7 16 72v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V72c0-13.3-10.7-24-24-24H40zM192 64c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zm0 160c-17.7 0-32 14.3-32 32s14.3 32 32 32H480c17.7 0 32-14.3 32-32s-14.3-32-32-32H192zM16 232v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V232c0-13.3-10.7-24-24-24H40c-13.3 0-24 10.7-24 24zM40 368c-13.3 0-24 10.7-24 24v48c0 13.3 10.7 24 24 24H88c13.3 0 24-10.7 24-24V392c0-13.3-10.7-24-24-24H40z" />
                    </svg>
                    Dashboard
                </a>
            </li>
            <li class="sidebar-item <?php if ($isCoordinator)
                echo 'd-none'; ?>">
                <a href="#" class="sidebar-link " data-bs-toggle="collapse" data-bs-target="#pages" aria-expanded="<?php if ($current_page == 'rooms.php' || $current_page == 'subject.php' || $current_page == 'curriculum.php' || $current_page == 'calendar.php' || $current_page == 'schoolYear.php')
                    echo 'true';
                else
                    echo 'false'; ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="icon-svg me-1">
                        <!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path
                            d="M64 464c-8.8 0-16-7.2-16-16V64c0-8.8 7.2-16 16-16H224v80c0 17.7 14.3 32 32 32h80V448c0 8.8-7.2 16-16 16H64zM64 0C28.7 0 0 28.7 0 64V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V154.5c0-17-6.7-33.3-18.7-45.3L274.7 18.7C262.7 6.7 246.5 0 229.5 0H64zm56 256c-13.3 0-24 10.7-24 24s10.7 24 24 24H264c13.3 0 24-10.7 24-24s-10.7-24-24-24H120zm0 96c-13.3 0-24 10.7-24 24s10.7 24 24 24H264c13.3 0 24-10.7 24-24s-10.7-24-24-24H120z" />
                    </svg>
                    Curriculum
                </a>
                <ul id="pages" class="sidebar-dropdown list-unstyled collapse <?php if ($current_page == 'rooms.php' || $current_page == 'subject.php' || $current_page == 'curriculum.php' || $current_page == 'calendar.php' || $current_page == 'schoolYear.php')
                    echo 'show'; ?>">
                    <li class="sidebar-item">
                        <a href="../Features/schoolYear.php" class="sidebar-link sidebar-link-child <?php if ($current_page == 'schoolYear.php')
                            echo 'active'; ?>">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="icon-svg me-2">
                                <!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                <path
                                    d="M337.8 5.4C327-1.8 313-1.8 302.2 5.4L166.3 96H48C21.5 96 0 117.5 0 144V464c0 26.5 21.5 48 48 48H256V416c0-35.3 28.7-64 64-64s64 28.7 64 64v96H592c26.5 0 48-21.5 48-48V144c0-26.5-21.5-48-48-48H473.7L337.8 5.4zM96 192h32c8.8 0 16 7.2 16 16v64c0 8.8-7.2 16-16 16H96c-8.8 0-16-7.2-16-16V208c0-8.8 7.2-16 16-16zm400 16c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v64c0 8.8-7.2 16-16 16H512c-8.8 0-16-7.2-16-16V208zM96 320h32c8.8 0 16 7.2 16 16v64c0 8.8-7.2 16-16 16H96c-8.8 0-16-7.2-16-16V336c0-8.8 7.2-16 16-16zm400 16c0-8.8 7.2-16 16-16h32c8.8 0 16 7.2 16 16v64c0 8.8-7.2 16-16 16H512c-8.8 0-16-7.2-16-16V336zM232 176a88 88 0 1 1 176 0 88 88 0 1 1 -176 0zm88-48c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16s-7.2-16-16-16H336V144c0-8.8-7.2-16-16-16z" />
                            </svg>School
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
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="icon-svg me-1">
                        <path
                            d="M192 0c-41.8 0-77.4 26.7-90.5 64H64C28.7 64 0 92.7 0 128V448c0 35.3 28.7 64 64 64H320c35.3 0 64-28.7 64-64V128c0-35.3-28.7-64-64-64H282.5C269.4 26.7 233.8 0 192 0zm0 64a32 32 0 1 1 0 64 32 32 0 1 1 0-64zM128 256a64 64 0 1 1 128 0 64 64 0 1 1 -128 0zM80 432c0-44.2 35.8-80 80-80h64c44.2 0 80 35.8 80 80c0 8.8-7.2 16-16 16H96c-8.8 0-16-7.2-16-16z" />
                    </svg>
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
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="icon-svg me-1">
                        <!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path
                            d="M0 416c0 17.7 14.3 32 32 32l54.7 0c12.3 28.3 40.5 48 73.3 48s61-19.7 73.3-48L480 448c17.7 0 32-14.3 32-32s-14.3-32-32-32l-246.7 0c-12.3-28.3-40.5-48-73.3-48s-61 19.7-73.3 48L32 384c-17.7 0-32 14.3-32 32zm128 0a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zM320 256a32 32 0 1 1 64 0 32 32 0 1 1 -64 0zm32-80c-32.8 0-61 19.7-73.3 48L32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l246.7 0c12.3 28.3 40.5 48 73.3 48s61-19.7 73.3-48l54.7 0c17.7 0 32-14.3 32-32s-14.3-32-32-32l-54.7 0c-12.3-28.3-40.5-48-73.3-48zM192 128a32 32 0 1 1 0-64 32 32 0 1 1 0 64zm73.3-64C253 35.7 224.8 16 192 16s-61 19.7-73.3 48L32 64C14.3 64 0 78.3 0 96s14.3 32 32 32l86.7 0c12.3 28.3 40.5 48 73.3 48s61-19.7 73.3-48L480 128c17.7 0 32-14.3 32-32s-14.3-32-32-32L265.3 64z" />
                    </svg>
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
                <a href="#" class="sidebar-link" data-bs-toggle="collapse" data-bs-target="#profile"
                    aria-expanded="<?php if ($current_page == 'admin_security.php' || $current_page == 'admin_profile.php') echo 'true'; else echo 'false'; ?>">

                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="icon-svg me-1">
                        <!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path
                            d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z" />
                    </svg>
                    Profile
                </a>
                <ul id="profile"
                    class="sidebar-dropdown list-unstyled collapse <?php if ($current_page == 'admin_profile.php') echo 'show'; ?>">
                    <li class="sidebar-item">
                        <a href="../Features/admin_profile.php"
                            class="sidebar-link sidebar-link-child <?php if ($current_page == 'admin_profile.php') echo 'active'; ?>">Account</a>
                    </li>
                </ul>
            </li>


            <li class="sidebar-item">
                <a href="#" class="sidebar-link" data-bs-toggle="modal" data-bs-target="#logoutModal">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="icon-svg me-1">
                        <!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path
                            d="M377.9 105.9L500.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 27.3L377.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1-128 0c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM160 96L96 96c-17.7 0-32 14.3-32 32l0 256c0 17.7 14.3 32 32 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32l-64 0c-53 0-96-43-96-96L0 128C0 75 43 32 96 32l64 0c17.7 0 32 14.3 32 32s-14.3 32-32 32z" />
                    </svg>
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