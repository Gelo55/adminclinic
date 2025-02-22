<?php
include 'database.php';

if (isset($_POST['id'])) {
    $id = mysqli_real_escape_string($conn, $_POST['id']);
    $query = "SELECT * FROM students WHERE id = '$id'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);

    echo "<p><strong>Full Name:</strong> {$row['firstname']} {$row['middlename']} {$row['lastname']}</p>
          <p><strong>Student Number:</strong> {$row['student_number']}</p>
          <p><strong>Course:</strong> {$row['course']}</p>
          <p><strong>Year Level:</strong> {$row['year_level']}</p>
          <p><strong>Section:</strong> {$row['section']}</p>
          <p><strong>Age:</strong> {$row['age']}</p>
          <p><strong>Gender:</strong> {$row['gender']}</p>
          <p><strong>Address:</strong> {$row['address']}</p>
          <p><strong>Email:</strong> {$row['email']}</p>
          <p><strong>Contact:</strong> {$row['contact_number']}</p>
          <p><strong>Parent Contact:</strong> {$row['parent_contact']}</p>
          <p><strong>Disability Status:</strong> {$row['disability_status']}</p>
          <p><strong>Illness:</strong> {$row['illness']}</p>
          <p><strong>allergies:</strong> {$row['allergies']}</p>
          <p><strong>blood Type:</strong> {$row['blood_type']}</p>";
}
?>
