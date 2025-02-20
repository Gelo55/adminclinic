<?php
include 'database.php';
$id = $_POST['id'];
$query = "SELECT * FROM students WHERE id='$id'";
$result = $conn->query($query);
$data = $result->fetch_assoc();
echo json_encode($data);
?>
