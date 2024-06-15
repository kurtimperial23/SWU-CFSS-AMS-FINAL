<?php
require_once ('../../Process/db_connection.php'); // Include your database connection file
// Start session
session_start();

// Check if user is logged in
if (!isset($_SESSION["email"])) {
    // Redirect back to the login page with an error message
    header("Location: ../../index.php");
    exit();
}

// Check if user has access to this page
if ($_SESSION["user_role"] != "admin") {
    // Redirect back to the login page with an error message
    header("Location: ../../Process/authorization_error.php");
    exit();
}

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Reconnect to the database if the connection is not alive
    if (!mysqli_ping($conn)) {
        mysqli_close($conn);
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
    }
    
    // Check if a file was uploaded without errors
    if (isset($_FILES["curriculumFile"]) && $_FILES["curriculumFile"]["error"] == 0) {
        $file = $_FILES["curriculumFile"]["tmp_name"];
        $handle = fopen($file, "r");

        // Prepare the INSERT statement
        $sql = "INSERT INTO tbl_curriculum (department, program, year_level, term, service_college, subject_code, subject_description, units_lec, units_lab, total_units, total_hours, cs_lec, cs_lab, projected_students, lec_section, lab_section, lec_hours, lab_hours, total, lecture, labs) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($conn, $sql);

        // Bind parameters to the statement
        mysqli_stmt_bind_param($stmt, "sssssssssssssssssssss", $department, $program, $year_level, $term, $service_college, $subject_code, $subject_description, $units_lec, $units_lab, $total_units, $total_hours, $cs_lec, $cs_lab, $projected_students, $lec_section, $lab_section, $lec_hours, $lab_hours, $total, $lecture, $labs);

        // Loop through the file line by line
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            // Assign CSV data to variables
            list($department, $program, $year_level, $term, $service_college, $subject_code, $subject_description, $units_lec, $units_lab, $total_units, $total_hours, $cs_lec, $cs_lab, $projected_students, $lec_section, $lab_section, $lec_hours, $lab_hours, $total, $lecture, $labs) = $data;

            // Execute the prepared statement
            if (mysqli_stmt_execute($stmt)) {
                echo "Data inserted successfully.<br>";
            } else {
                echo "Error inserting data: " . mysqli_error($conn) . "<br>";
            }
        }

        // Close statement
        mysqli_stmt_close($stmt);

        fclose($handle);
    } else {
        // Handle file upload error
        echo "Error uploading file.<br>";
    }
}

// Close database connection
mysqli_close($conn);
?>