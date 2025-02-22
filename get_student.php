<?php
include 'database.php'; // Ensure database connection

if (isset($_GET['id'])) {
    $id = intval($_GET['id']); // Get student ID securely
    $query = "SELECT * FROM students WHERE id = $id";
    $result = mysqli_query($conn, $query);

    if ($row = mysqli_fetch_assoc($result)) {
        echo json_encode($row); // Return student data as JSON
    } else {
        echo json_encode(["error" => "Student not found"]);
    }
}
?>
