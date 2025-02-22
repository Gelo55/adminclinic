<?php
include 'database.php'; // Ensure database connection

$course = isset($_POST['course']) ? $_POST['course'] : "";
$year_level = isset($_POST['year_level']) ? $_POST['year_level'] : "";
$section = isset($_POST['section']) ? $_POST['section'] : "";
$student_number = isset($_POST['student_number']) ? $_POST['student_number'] : "";

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
if (!empty($student_number)) {
    $query .= " AND student_number LIKE '%" . mysqli_real_escape_string($conn, $student_number) . "%'";
}

// Sort by last name alphabetically
$query .= " ORDER BY lastname ASC";

$result = mysqli_query($conn, $query);

while ($row = mysqli_fetch_assoc($result)) {
    // Format Full Name
    $full_name = "{$row['lastname']}, {$row['firstname']} {$row['middlename']}";

    echo "<tr>
        <td>{$row['student_number']}</td>
        <td>{$full_name}</td>
        <td>{$row['section']}</td>
        <td>{$row['course']}</td>
        <td>{$row['year_level']}</td>
        <td>

               <a href='medical_records.php?id={$row["id"]}' class='btn btn-success btn-sm' title='View Medical Records'>
        <i class='fas fa-file-medical'></i>
    </a>

            <button class='btn btn-info btn-sm' onclick='viewStudent({$row["id"]})' title='More Info'>
                <i class='fas fa-eye'></i>
            </button>
            
            <form action='edit_student.php' method='GET' style='display:inline;'>
                <input type='hidden' name='id' value='{$row['id']}'>
                <button type='submit' class='btn btn-primary btn-sm' title='Edit'>
                    <i class='fas fa-edit'></i>
                </button>
            </form>
            
            <button class='btn btn-danger btn-sm' onclick='deleteStudent({$row['id']})' title='Delete'>
                <i class='fas fa-trash'></i>
            </button>
        </td>
    </tr>";
}
?>

<style>
    button i{
        color: black;
    }
</style>

