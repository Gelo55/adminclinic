<?php
include 'database.php'; // Make sure to include your database connection

if (isset($_POST['verify_test'])) {
    $student_id = $_POST['student_id'];
    $test_type = $_POST['test_type'];

    // Define test results (for now, set a default value)
    $test_result = "Completed"; // You can modify this to include actual results if needed

    // Update the database for the selected test
    $query = "UPDATE students SET $test_type = ? WHERE id = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("si", $test_result, $student_id);

    if ($stmt->execute()) {
        // Redirect back to the medical records page after updating
        header("Location: medical_records.php?status=updated");
        exit();
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
?>
