<?php

include 'db.php';

if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];

    // Corrected the SQL query: Use backticks or no quotes for table name
    $sql = "DELETE FROM `information` WHERE id = $id";

    $result = mysqli_query($con, $sql);

    if ($result) {
        echo "Deleted successfully";
        header('location:managestud.php');
    } else {
        die(mysqli_error($con));
    }
}

?>
