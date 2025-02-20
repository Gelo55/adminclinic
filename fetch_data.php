<?php
include 'database.php'; // Ensure database connection

$course = isset($_POST['course']) ? $_POST['course'] : "";
$year_level = isset($_POST['year_level']) ? $_POST['year_level'] : "";
$section = isset($_POST['section']) ? $_POST['section'] : "";

// Build the query dynamically based on filters
$query = "SELECT * FROM students WHERE 1";

if (!empty($course)) {
    $query .= " AND course = '" . mysqli_real_escape_string($conn, $course) . "'";
}
if (!empty($year_level)) {
    $query .= " AND year_level = '" . mysqli_real_escape_string($conn, $year_level) . "'";
}
if (!empty($section)) {
    $query .= " AND section LIKE '%" . mysqli_real_escape_string($conn, $section) . "%'";
}

$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
        <td>{$row['firstname']}</td>
        <td>{$row['lastname']}</td>
        <td>{$row['middlename']}</td>
        <td>{$row['student_number']}</td>
        <td>{$row['course']}</td>
        <td>{$row['year_level']}</td>
        <td>{$row['section']}</td>
        <td>{$row['age']}</td>
        <td>{$row['gender']}</td>
        <td>{$row['address']}</td>
        <td>{$row['contact_number']}</td>
        <td>{$row['parent_contact']}</td>
        <td>{$row['disability_status']}</td>
        <td>{$row['illness']}</td>
        <td>
            <a href='edit_student.php?id={$row["id"]}' class='btn btn-primary btn-sm'>Edit</a>
            <button class='btn btn-danger btn-sm' onclick='deleteStudent({$row["id"]})'>Delete</button>
        </td>
    </tr>";
}
?>
