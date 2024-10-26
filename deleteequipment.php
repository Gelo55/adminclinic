<?php

include 'db.php';

if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];

    // Corrected the SQL query: Use backticks or no quotes for table name
    $sql5 = "DELETE FROM `equipment` WHERE id = $id";

    $result5 = mysqli_query($con5, $sql5);

    if ($result5) {
        echo "Deleted successfully";
        header('location:equipment.php');
    } else {
        die(mysqli_error($con5));
    }
}

?>
