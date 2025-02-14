<?php
include 'database.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']); // Ensure it's an integer to prevent SQL injection

    // Use a prepared statement for safety
    $stmt = $con->prepare("DELETE FROM medicines WHERE id = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo "success"; // Send response back to JavaScript
    } else {
        echo "error";
    }

    $stmt->close();
    $con->close();
}
?>