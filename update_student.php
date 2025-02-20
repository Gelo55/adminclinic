<?php
include 'database.php';

$id = $_POST['id'] ?? '';
$firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
$lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
$middlename = mysqli_real_escape_string($conn, $_POST['middlename']);
$student_number = mysqli_real_escape_string($conn, $_POST['student_number']);
$course = mysqli_real_escape_string($conn, $_POST['course']);
$year_level = mysqli_real_escape_string($conn, $_POST['year_level']);
$section = mysqli_real_escape_string($conn, $_POST['section']);
$age = intval($_POST['age']);
$gender = mysqli_real_escape_string($conn, $_POST['gender']);
$address = mysqli_real_escape_string($conn, $_POST['address']);
$contact_number = mysqli_real_escape_string($conn, $_POST['contact_number']);
$parent_contact = mysqli_real_escape_string($conn, $_POST['parent_contact']);
$disability_status = mysqli_real_escape_string($conn, $_POST['disability_status']);
$illness = mysqli_real_escape_string($conn, $_POST['illness']);

if ($id) {
    $query = "UPDATE students SET firstname='$firstname', lastname='$lastname', middlename='$middlename',
        student_number='$student_number', course='$course', year_level='$year_level', section='$section',
        age='$age', gender='$gender', address='$address', contact_number='$contact_number', 
        parent_contact='$parent_contact', disability_status='$disability_status', illness='$illness'
        WHERE id='$id'";

    if ($conn->query($query) === TRUE) {
        header("Location: index.php?success=Student updated successfully!");
        exit;
    } else {
        header("Location: edit_student.php?id=$id&error=" . urlencode("Failed to update student!"));
        exit;
    }
} else {
    // Prevent duplicate insertion by checking if the student already exists
    $check_query = "SELECT * FROM students WHERE student_number = '$student_number'";
    $check_result = mysqli_query($conn, $check_query);

    if (mysqli_num_rows($check_result) > 0) {
        header("Location: add_student.php?error=" . urlencode("Student already exists!"));
        exit;
    }

    $query = "INSERT INTO students (firstname, lastname, middlename, student_number, course, year_level, section, 
        age, gender, address, contact_number, parent_contact, disability_status, illness) 
        VALUES ('$firstname', '$lastname', '$middlename', '$student_number', '$course', '$year_level', '$section', 
        '$age', '$gender', '$address', '$contact_number', '$parent_contact', '$disability_status', '$illness')";

    if ($conn->query($query) === TRUE) {
        header("Location: medicalstudent.php?success=Student added successfully!");
        exit;
    } else {
        header("Location: medicalform.php?error=" . urlencode("Failed to add student!"));
        exit;
    }
}
?>
