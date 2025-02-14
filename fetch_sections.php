<<?php
include 'database.php';

if (isset($_POST['year_id'])) {
    $year_id = $_POST['year_id'];
    $query = "SELECT * FROM sections WHERE year_level_id = ?";
    $stmt = $con->prepare($query);
    $stmt->bind_param("i", $year_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $options = '<option value="">Select Section</option>';
    while ($row = $result->fetch_assoc()) {
        $options .= '<option value="' . $row['id'] . '">' . $row['section_name'] . '</option>';
    }
    echo $options;
}
?>