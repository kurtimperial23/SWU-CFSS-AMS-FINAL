<?php
require_once ('../../common_processes/db_connection.php'); // Include your database connection file

// Function to fetch all roomss
function getRooms()
{
    global $conn; // Access the global connection variable

    // Prepare and execute SQL query to fetch rooms data
    $stmt = $conn->prepare("SELECT * FROM tbl_rooms");
    $stmt->execute();

    // Fetch all rooms as associative array
    $result = $stmt->get_result();
    $rooms = $result->fetch_all(MYSQLI_ASSOC);

    return $rooms;
}

// Function to add a new room
function addRoom($roomName, $roomCode)
{
    global $conn; // Access the global connection variable

    // Prepare and execute SQL query to insert new room
    $stmt = $conn->prepare("INSERT INTO tbl_rooms (room_name, room_code) VALUES (?, ?)");
    $stmt->bind_param('ss', $roomName, $roomCode);

    return $stmt->execute(); // Return true if insertion is successful, false otherwise
}

// Function to edit an existing room
function editRoom($roomId, $roomName, $roomCode)
{
    global $conn; // Access the global connection variable

    // Prepare and execute SQL query to update room
    $stmt = $conn->prepare("UPDATE tbl_rooms SET room_name = ?, room_code = ? WHERE id = ?");
    $stmt->bind_param('ssi', $roomName, $roomCode, $roomId);

    if ($stmt->execute()) {
        // If update is successful
        return json_encode(array("success" => true));
    } else {
        // If update fails
        return json_encode(array("success" => false));
    }
}

// Function to delete an existing room
function deleteRoom($roomId)
{
    global $conn; // Access the global connection variable

    // Prepare and execute SQL query to delete room
    $stmt = $conn->prepare("DELETE FROM tbl_rooms WHERE id = ?");
    $stmt->bind_param('i', $roomId);

    return $stmt->execute(); // Return true if deletion is successful, false otherwise
}
?>