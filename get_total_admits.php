<?php
include 'database.php'; // Include your database connection

// Query to count total rows in the 'admit' table
$query = "SELECT COUNT(*) as total FROM admit";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_assoc($result);

// Return the count as JSON
echo json_encode(["total" => $row['total']]);
?>
