<?php
include 'database.php';
$id = $_POST['id'];
$query = "DELETE FROM students WHERE id='$id'";
$conn->query($query);
echo "Student deleted successfully!";
?>
