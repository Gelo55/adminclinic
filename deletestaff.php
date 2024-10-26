<?php

include 'db.php';

if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];

    // Corrected the SQL query: Use backticks or no quotes for table name
    $sql2 = "DELETE FROM `staff` WHERE id = $id";

    $result2 = mysqli_query($con2, $sql2);

    if ($result2) {
        echo "Deleted successfully";
        header('location:managestaff.php');
    } else {
        die(mysqli_error($con2));
    }
}

?>
