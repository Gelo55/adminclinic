<?php

include 'db.php';

if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];

    // Corrected the SQL query: Use backticks or no quotes for table name
    $sql4 = "DELETE FROM `medication` WHERE id = $id";

    $result4 = mysqli_query($con4, $sql4);

    if ($result4) {
        echo "Deleted successfully";
        header('location:medication.php');
    } else {
        die(mysqli_error($con4));
    }
}

?>
