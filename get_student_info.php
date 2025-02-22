<?php
include 'database.php';

if (isset($_POST['id'])) {
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $query = "SELECT * FROM students WHERE id = '$id'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);

    if ($row) {
        echo "<p><strong>Age:</strong> {$row['age']}</p>";
        echo "<p><strong>Gender:</strong> {$row['gender']}</p>";
        echo "<p><strong>Address:</strong> {$row['address']}</p>";
        echo "<p><strong>Email:</strong> {$row['email']}</p>";
        echo "<p><strong>Contact Number:</strong> {$row['contact_number']}</p>";
        echo "<p><strong>Parent Contact:</strong> {$row['parent_contact']}</p>";
        echo "<p><strong>Disability Status:</strong> {$row['disability_status']}</p>";
        echo "<p><strong>Illness:</strong> {$row['illness']}</p>";
        echo "<p><strong>allergies:</strong> {$row['allergies']}</p>";
        echo "<p><strong>Blood Type:</strong> {$row['blood_type']}</p>";
    } else {
        echo "<p>No data found.</p>";
    }
}
?>
