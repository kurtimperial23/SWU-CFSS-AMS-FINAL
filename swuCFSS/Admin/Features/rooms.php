<?php
require_once ('../../common_includes/cdn.php');
require_once ('../../common_processes/db_connection.php'); // Include the CRUD functions
require_once ('../admin_processes/rooms_crud.php'); // Include the CRUD functions

session_start();

if (!isset($_SESSION["email"])) {
    header("Location: ../../index.php");
    exit();
}

if ($_SESSION["user_role"] !== "admin") {
    header("Location: ../../common_processes/authorization_error.php");
    exit();
}

// CRUD operations
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["addRoomSubmit"])) {
        $roomName = $_POST["roomName"];
        $roomCode = $_POST["roomCode"];

        if (addRoom($roomName, $roomCode)) {
            header("Location: {$_SERVER['PHP_SELF']}?alert=success");
            exit();
        } else {
            header("Location: {$_SERVER['PHP_SELF']}?alert=failure");
            exit();
        }
    }

    if (isset($_POST["editRoomSubmit"])) {
        $roomId = $_POST["roomId"];
        $roomName = $_POST["roomName"];
        $roomCode = $_POST["roomCode"];

        if (editRoom($roomId, $roomName, $roomCode)) {
            header("Location: {$_SERVER['PHP_SELF']}?alert=edit_success");
            exit();
        } else {
            echo "Error editing room";
        }
    }

    if (isset($_POST["deleteRoomSubmit"])) {
        $roomId = $_POST["roomId"];

        if (deleteRoom($roomId)) {
            header("Location: {$_SERVER['PHP_SELF']}?alert=delete_success");
            exit();
        } else {
            echo "Error deleting room";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rooms</title>

    <link rel="stylesheet" href="../../Styles/styles.css">
</head>

<body>

    <div class="wrapper">
        <?php include ('../admin_includes/sidebar.php'); ?>
        <div class="main">
            <?php include '../admin_includes/admin_nav.php' ?>

            <main class="content px-3 py-4">
                <div class="container-fluid">
                    <?php include '../../Admin/admin_includes/dashboardBanner.php'; ?>

                    <div class="col-12 col-md-2 d-flex">
                        <div class="card flex-fill border-0">
                            <div class="card-body d-flex justify-content-center align-items-center">
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#addRoomModal">Add Rooms</button>
                            </div>
                        </div>
                    </div>
                </div>

                <?php
                require_once ('../../common_processes/delete_alert.php');
                if (isset($_GET['alert'])) {
                    $alert = $_GET['alert'];
                    if ($alert === 'success') {
                        $alertClass = 'alert-success';
                        $alertMessage = 'Room added successfully.';
                    } elseif ($alert === 'failure') {
                        $alertClass = 'alert-danger';
                        $alertMessage = 'Error occurred while adding room.';
                    } elseif ($alert === 'edit_success') {
                        $alertClass = 'alert-success';
                        $alertMessage = 'Room edited successfully.';
                    } elseif ($alert === 'delete_success') {
                        $alertClass = 'alert-success';
                        $alertMessage = 'Room deleted successfully.';
                    }

                    echo '<div class="alert alert-dismissible fade show ' . $alertClass . '" role="alert">
                                <strong>' . ucfirst($alert) . '!</strong> ' . $alertMessage . '
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                              </div>';
                }
                ?>

                <div class="modal fade" id="addRoomModal" tabindex="-1" role="dialog"
                    aria-labelledby="addRoomModalTitle" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="addRoomModalTitle">Add Rooms</h5>
                            </div>
                            <div class="modal-body">
                                <form id="addRoomForm" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                    <div class="mb-3">
                                        <label for="roomName" class="form-label">Room Name</label>
                                        <input type="text" class="form-control" id="roomName" name="roomName" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="roomCode" class="form-label">Room Code</label>
                                        <input type="text" class="form-control" id="roomCode" name="roomCode" required>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary" name="addRoomSubmit">Add
                                            Room</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="editRoomModal<?php echo $room['id']; ?>" tabindex="-1" role="dialog"
                    aria-labelledby="editRoomModal<?php echo $room['id']; ?>Title" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editRoomModal<?php echo $room['id']; ?>Title">Edit Room</h5>
                            </div>
                            <div class="modal-body">
                                <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                    <input type="hidden" name="roomId" value="<?php echo $room['id']; ?>">
                                    <div class="mb-3">
                                        <label for="editRoomName" class="form-label">Room Name</label>
                                        <input type="text" class="form-control" id="editRoomName" name="roomName"
                                            value="<?php echo $room['room_name']; ?>" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="editRoomCode" class="form-label">Room Code</label>
                                        <input type="text" class="form-control" id="editRoomCode" name="roomCode"
                                            value="<?php echo $room['room_code']; ?>" required>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary" name="editRoomSubmit">Save
                                            changes</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal fade" id="deleteConfirmationModal" tabindex="-1" role="dialog"
                    aria-labelledby="deleteConfirmationModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="deleteConfirmationModalLabel">Confirm Delete</h5>
                            </div>
                            <div class="modal-body">
                                Are you sure you want to delete this room?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                <form id="deleteRoomForm" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                    <input type="hidden" id="deleteRoomId" name="roomId">
                                    <button type="submit" class="btn btn-danger" name="deleteRoomSubmit">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <?php include ('../modals/logoutModal.php'); ?>

                <div class="card border-0">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h5 class="card-title m-0">Rooms</h5>
                            </div>
                            <div class="col-auto">
                                <select name="semester-dropdown" id="semester-dropdown"
                                    class="form-select form-select-sm">
                                    <option value="Semester 1">Semester 1</option>
                                    <option value="Semester 2">Semester 2</option>
                                    <option value="Semester 2">Display all</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="myTable" class="table table-hover" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Room Code</th>
                                    <th>Room Name</th>
                                    <th>Options</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $rooms = getRooms($conn); // Fetch rooms data
                                foreach ($rooms as $room) {
                                    echo "<tr>";
                                    echo "<td>{$room['room_code']}</td>";
                                    echo "<td>{$room['room_name']}</td>";
                                    echo "<td class='text-center'>";
                                    echo "<form method='post' action='{$_SERVER['PHP_SELF']}'>";
                                    echo "<input type='hidden' name='roomId' value='{$room['id']}'>";
                                    echo "<button type='button' class='btn btn-link p-0 edit-room-submit' data-room-id='{$room['id']}' onclick=\"confirmDelete({$room['id']})\"><i class='fa-solid fa-trash'></i></button>";
                                    echo " | ";
                                    echo "<button type='button' class='btn p-0 btn-link edit-room-submit' data-bs-target='#editRoomModal{$room['id']}' data-room-id='{$room['id']}'><i class='fa-solid fa-pen-to-square'></i></button>";
                                    echo "</form>";
                                    echo "</td>";
                                    echo "</tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </main>
        </div>
    </div>
</body>
<script src="../../Scripts/script.js"></script>
<script>
    function confirmDelete(roomId) {
        document.getElementById('deleteRoomId').value = roomId;
        $('#deleteConfirmationModal').modal('show');
    }

    const roomName = document.getElementById('editRoomName' + roomId).value;
    const roomCode = document.getElementById('editRoomCode' + roomId).value;


    // Add event listener for edit room form submission
    document.addEventListener('DOMContentLoaded', function () {
        const editRoomForms = document.querySelectorAll('.edit-room-submit');
        editRoomForms.forEach(form => {
            form.addEventListener('click', function (event) {
                event.preventDefault();
                const roomId = form.getAttribute('data-room-id');
                const roomName = document.getElementById('editRoomName' + roomId).value;
                const roomCode = document.getElementById('editRoomCode' + roomId).value;
                const formData = new FormData();
                formData.append('editRoomSubmit', true);
                formData.append('roomId', roomId);
                formData.append('roomName', roomName);
                formData.append('roomCode', roomCode);
                fetch('<?php echo $_SERVER['PHP_SELF']; ?>', {
                    method: 'POST',
                    body: formData
                })
                    .then(response => {
                        if (!response.ok) {
                            throw new Error('Network response was not ok');
                        }
                        return response.json();
                    })
                    .then(data => {
                        if (data.success) {
                            window.location.href =
                                '<?php echo $_SERVER['PHP_SELF']; ?>?alert=edit_success';
                        } else {
                            console.error('Error editing room');
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                    });
            });
        });
    });
</script>

</html>