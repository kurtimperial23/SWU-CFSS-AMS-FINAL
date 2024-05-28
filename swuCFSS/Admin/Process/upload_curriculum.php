<?php
require_once ('../../Process/db_connection.php'); // Include your database connection file
// Start session
session_start();

// Check if user is logged in
if (!isset($_SESSION["username"])) {
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

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['curriculumFile'])) {
    $file = $_FILES['curriculumFile'];

    // Check for upload errors
    if ($file['error'] == 0) {
        $filename = $file['name'];
        $fileTmpName = $file['tmp_name'];
        $fileSize = $file['size'];
        $fileType = $file['type'];
        $fileExt = strtolower(pathinfo($filename, PATHINFO_EXTENSION));

        $allowedExt = ['csv'];

        if (in_array($fileExt, $allowedExt)) {
            // Define the absolute path for the upload directory
            $uploadDir = realpath(__DIR__ . '/../uploads') . '/';

            // Check if the directory exists, if not create it
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0755, true);
            }

            $newFilename = uniqid('', true) . "." . $fileExt;
            $fileDestination = $uploadDir . $newFilename;

            if (move_uploaded_file($fileTmpName, $fileDestination)) {
                // Process the CSV file
                if (($handle = fopen($fileDestination, 'r')) !== FALSE) {
                    $headers = fgetcsv($handle, 1000, ",");

                    // Define the columns we are interested in
                    $requiredColumns = [
                        'Department',
                        'Program',
                        'Year level',
                        'Term',
                        'Service college',
                        'Subject code',
                        'Subject description',
                        'Units lec',
                        'Units lab',
                        'Total units',
                        'Total hours',
                        'CS lec',
                        'CS lab',
                        'Projected students',
                        'Lec section',
                        'Lab section',
                        'Lec hours',
                        'Lab hours',
                        'Total',
                        'Lecture',
                        'Labs'
                    ];

                    // Get the indices of the required columns
                    $indices = [];
                    foreach ($requiredColumns as $col) {
                        $index = array_search($col, $headers);
                        if ($index !== false) {
                            $indices[$col] = $index;
                        }
                    }

                    $filteredData = [];
                    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                        $filteredRow = [];
                        foreach ($indices as $key => $index) {
                            $filteredRow[$key] = $data[$index];
                        }
                        $filteredData[] = $filteredRow;
                    }
                    fclose($handle);

                    foreach ($filteredData as $row) {
                        // Replace empty or null values with empty strings
                        foreach ($row as &$value) {
                            if ($value === null || $value === '') {
                                $value = ''; // Replace empty or null value with an empty string
                            }
                        }

                        // Example: Insert into the database
                        $query = "INSERT INTO tbl_curriculum (department, program, year_level, term, service_college, subject_code, subject_description, units_lec, units_lab, total_units, total_hours, cs_lec, cs_lab, projected_students, lec_section, lab_section, lec_hours, lab_hours, total, lecture, labs) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
                        $stmt = $conn->prepare($query);
                        $stmt->bind_param(
                            "sssssssssssssssssssss",
                            $row['Department'],
                            $row['Program'],
                            $row['Year level'],
                            $row['Term'],
                            $row['Service college'],
                            $row['Subject code'],
                            $row['Subject description'],
                            $row['Units lec'],
                            $row['Units lab'],
                            $row['Total units'],
                            $row['Total hours'],
                            $row['CS lec'],
                            $row['CS lab'],
                            $row['Projected students'],
                            $row['Lec section'],
                            $row['Lab section'],
                            $row['Lec hours'],
                            $row['Lab hours'],
                            $row['Total'],
                            $row['Lecture'],
                            $row['Labs']
                        );
                        $stmt->execute();
                    }



                    header("Location: curriculum_page.php?uploadsuccess");
                }
            } else {
                echo "Error moving the uploaded file.";
            }
        } else {
            echo "Invalid file type. Only CSV files are allowed.";
        }
    } else {
        echo "Error uploading the file.";
    }
}
?>