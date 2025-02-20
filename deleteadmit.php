<?php

include 'database.php';

if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];

    // Corrected the SQL query: Use backticks or no quotes for table name
    $sql = "DELETE FROM `admit` WHERE id = $id";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "Deleted successfully";
        header('location:admitpatient.php');
    } else {
        die(mysqli_error($conn));
    }
}


?>