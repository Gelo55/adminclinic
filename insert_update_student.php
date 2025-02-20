<?php
include 'database.php';

$id = $_POST['id'] ?? '';
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$middlename = $_POST['middlename'];
$student_number = $_POST['student_number'];
$course = $_POST['course'];
$year_level = $_POST['year_level'];
$section = $_POST['section'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$contact_number = $_POST['contact_number'];
$parent_contact = $_POST['parent_contact'];
$disability_status = $_POST['disability_status'];
$illness = $_POST['illness'];

if ($id) {
    $query = "UPDATE students SET firstname='$firstname', lastname='$lastname', middlename='$middlename',
        student_number='$student_number', course='$course', year_level='$year_level', section='$section',
        age='$age', gender='$gender', address='$address', contact_number='$contact_number', 
        parent_contact='$parent_contact', disability_status='$disability_status', illness='$illness'
        WHERE id='$id'";
    echo "Student updated successfully!";
} else {
    $query = "INSERT INTO students (firstname, lastname, middlename, student_number, course, year_level, section, 
        age, gender, address, contact_number, parent_contact, disability_status, illness) 
        VALUES ('$firstname', '$lastname', '$middlename', '$student_number', '$course', '$year_level', '$section', 
        '$age', '$gender', '$address', '$contact_number', '$parent_contact', '$disability_status', '$illness')";
    echo "Student added successfully!";
    
}

$conn->query($query);
?>
