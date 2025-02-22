<?php
include 'database.php'; // Include your database connection

$sql = "SELECT COUNT(*) as total FROM medicine"; // Change 'medicine' to your actual table name
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo $row['total']; // Output the total count
} else {
    echo "0";
}
$conn->close();
?>
