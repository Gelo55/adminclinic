<?php
include 'database.php';

if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];

    // Validate ID (ensure it's a number)
    if (!is_numeric($id)) {
        die("Invalid ID");
    }

    // Use prepared statement to prevent SQL injection
    $stmt = $con->prepare("DELETE FROM students WHERE id = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo "Deleted successfully";
        // Redirect back to main page (change 'index.php' to your actual page)
        header("Location: firststemdata.php");
        exit();
    } else {
        die("Error: " . $stmt->error);
    }

    $stmt->close();
}
?>
