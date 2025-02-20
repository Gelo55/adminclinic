<?php 

include 'database.php';

function getUniqueValues($conn, $column) {
    $values = [];
    $query = "SELECT DISTINCT $column FROM students";
    $result = $conn->query($query);
    while ($row = $result->fetch_assoc()) {
        $values[] = $row[$column];
    }
    return $values;
}

$data = [
    "courses" => getUniqueValues($conn, "course"),
    "year_levels" => getUniqueValues($conn, "year_level"),
    "sections" => getUniqueValues($conn, "section")
];

echo json_encode($data);
$conn->close();
?>