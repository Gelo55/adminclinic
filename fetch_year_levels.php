<?php
include 'database.php';

if (isset($_POST['course_id'])) {
    $course_id = $_POST['course_id'];
    $query = "SELECT * FROM year_levels WHERE course_id = ?";
    $stmt = $con->prepare($query);
    $stmt->bind_param("i", $course_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $options = '<option value="">Select Year Level</option>';
    while ($row = $result->fetch_assoc()) {
        $options .= '<option value="' . $row['id'] . '">' . $row['year_level'] . '</option>';
    }
    echo $options;
}