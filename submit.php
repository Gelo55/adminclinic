
<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "studentdata";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO medicines (name, brand, dosage, applicable, quantity, status, date) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssiss", $name, $brand, $dosage, $applicable, $quantity, $status, $date);

// Set parameters and execute
$name = $_POST['name'];
$brand = $_POST['brand'];
$dosage = $_POST['dosage'];
$applicable = $_POST['applicable'];
$quantity = $_POST['quantity'];
$status = $_POST['status'];
$date = $_POST['date'];
$stmt->execute();

$stmt->close();
$conn->close();
?>