<?php
include("connect.php");
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$staff_username = $staff_password = "";
$staff_username_error = $staff_password_error = "";

if (isset($_POST['register'])) {
    if (empty($_POST["staff_username"])) {
        $staff_username_error = "Username is Required!";
    } else {
        $staff_username = $_POST["staff_username"];
    }

    if (empty($_POST["staff_password"])) {
        $staff_password_error = "Password is Required!";
    } else {
        // Hash the password before storing
        $staff_password = password_hash($_POST["staff_password"], PASSWORD_DEFAULT);
    }

    if (empty($staff_username_error) && empty($staff_password_error)) {
        $sql = "INSERT INTO registration (staffID, password) VALUES ('$staff_username', '$staff_password')";
        
        if ($connect->query($sql) === TRUE) {
            echo "<script>alert('Staff registered successfully!');</script>";
            echo "<script>window.open('index.php','_self');</script>";
            exit();
        } else {
            echo "<script>alert('Error: " . $connect->error . "');</script>";
        }
    } 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Registration</title>
    <link rel="stylesheet" href="assets/css/register1.css">
</head>
<body>
<div class="registration-container">
    <div class="registration-box">
    <img src="assets/images/bcp.png" alt="Bestlink College" class="logo">
        <h2><b>Staff Registration</b></h2>
        <form method="POST">
            <div class="input-group">
                <label for="staff_username">Username</label>
                <input type="text" id="staff_username" name="staff_username" required>
                <span class='error'><?php echo $staff_username_error; ?></span>
            </div>
            <div class="input-group">
                <label for="staff_password">Password</label>
                <input type="password" id="staff_password" name="staff_password" required>
                <span class='error'><?php echo $staff_password_error; ?></span>
            </div>
            <div class="input-group">
                <button type="submit" class="submit-button" name="register">Register</button>
            </div>
        </form>
    </div>
</div>
</body>
</html>
