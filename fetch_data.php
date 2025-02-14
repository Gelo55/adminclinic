
<?php

if (isset($_GET['table'])) {
    $table = preg_replace('/[^a-zA-Z0-9_]/', '', $_GET['table']);

    $sql = "SELECT * FROM `$table`";
    $result = $conn->query($sql);

    $data = [];

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    }

    echo json_encode($data);
}

$conn->close();
?>
