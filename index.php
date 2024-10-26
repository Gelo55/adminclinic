<?php
include("connect.php");
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
$username = $password = "";
$username_error = $password_error = "";
$user_type = ""; // Para malaman kung admin o staff

if (isset($_POST['submit'])) {
    if (empty($_POST["username"])) {
        $username_error = "Username is Required!";
    } else {
        $username = $_POST["username"];
    }

    if (empty($_POST["password"])) {
        $password_error = "Password is Required!";
    } else {
        $password = $_POST["password"];
    }

    if (empty($username_error) && empty($password_error)) {
        // tignan kung admin (dapat may @gmail.com)
        if (strpos($username, '@gmail.com') !== false) {
            $sql = "SELECT * FROM admin WHERE username='$username'";
            $res = $connect->query($sql);
            if ($res->num_rows > 0) {
                $ro = $res->fetch_assoc();
                // Directly compare passwords
                if ($password === $ro["password"]) {
                    $_SESSION["id"] = $ro["id"];
                    $_SESSION["username"] = $ro["username"];
                    $_SESSION["type"] = "admin";
                    echo "<script>alert('Successfully Logged In as Admin');</script>";
                    echo "<script>window.open('dash.php','_self');</script>";
                    exit();
                }
            }
        }

        // Tignan kung staff (dapat staff ID format: 21011418)
        if (preg_match('/^\d{8}$/', $username)) { // Change to allow only 8 digits
            $sql = "
                SELECT staff_id AS id, staffID, password FROM registration WHERE staffID='$username'";
        
            $res = $connect->query($sql);
            if ($res->num_rows > 0) {
                $ro = $res->fetch_assoc();
                
                // Verify hashed password
                if (password_verify($password, $ro["password"])) {
                    $_SESSION["id"] = $ro["id"];
                    $_SESSION["staffID"] = $ro["staffID"];
                    $_SESSION["type"] = "staff";
                    echo "<script>alert('Successfully Logged In as Staff');</script>";
                    echo "<script>window.open('staffdash.php','_self');</script>";
                    exit();
                }
            }
        }
        
        echo "<script>alert('Invalid Username or Password');</script>";        
    } 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bestlink College - Login</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
<div class="login-container">
    <div class="login-box">
        <img src="assets/images/bcp.png" alt="Bestlink College" class="logo">
        <h2><b>Sign in</b></h2>
        <form method="POST">
            <div class="input-group">
                <label for="username">Email or Staff ID</label>
                <input type="text" id="username" name="username" required>
                <span class='error'><?php echo $username_error; ?></span>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
                <span class='error'><?php echo $password_error; ?></span>
                <div class="show-password">
                    <input type="checkbox" id="showPassword" onclick="togglePassword()">
                    <label for="showPassword" style="margin-left: 5px;"></label>
                </div>
            </div>
            <div class="input-group">
                <button type="submit" class="submit-button" name="submit">Sign in</button>
                <br><br>
            </div>
        </form>
    </div>
</div>

<script>
function togglePassword() {
    const passwordField = document.getElementById("password");
    const showPasswordCheckbox = document.getElementById("showPassword");
    passwordField.type = showPasswordCheckbox.checked ? "text" : "password";
}
</script>

<style>
/* Your CSS styles remain unchanged */
.input-group {
    position: relative; 
}

input[type="password"] {
    padding-right: 40px; 
}

.show-password {
    position: absolute;
    right: 10px; 
    top: 70%; 
    transform: translateY(-50%); 
    display: flex; 
    align-items: center; 
}

input[type="checkbox"] {
    cursor: pointer; 
}

.show-password input {
     margin-left: 5px;
}
    
.error{
    color: red;
    text-align: center;
}

/* new css for button */
.submit-button{
    display: inline-block; 
    width: 100%; 
    padding: 10px; 
    text-align: center;
    background-color: #0056b3; 
    color: white;
    position: relative;
    top: 20px;
    border: none; 
    border-radius: 5px; 
    cursor: pointer; 
    transition: background-color 0.3s; 
}

.admission-button {
    text-decoration: none; 
}

.submit-button:hover, .admission-button:hover {
    background-color: #002244; 
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color: #0056b3; 
    animation: fadeIn 1s ease-in-out;
}

@keyframes fadeIn {
    from {
        opacity: 0;
    }

    to {
        opacity: 1;
    }
}

.login-container {
    display: flex;
    justify-content: center;
    align-items: center;
    width: 100%;
    height: 80%;
    flex-direction: column; 
}

.login-box {
    background-color: #ffffff;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0px 10px 20px rgba(0, 0, 0, 0.1);
    text-align: center;
    width: 400px;
    box-shadow: 5px 5px 10px #888888;
    animation: fadeInBox 1s ease-in-out;
}

@keyframes fadeInBox {
    from {
        opacity: 0;
        transform: translateY(20px);
    }

    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.logo {
    width: 100px;
    margin-bottom: 15px;
    opacity: 0;
    animation: fadeInBox 1s ease-in-out forwards;
}

h1 {
    color: white; 
    margin-bottom: 20px;
    font-size: 24px;
}

h2 {
    color: #28282b;
    margin-bottom: 15px;
    font-size: 23px;
    opacity: 0;
    animation: fadeInBox 1s ease-in-out forwards;
}

.input-group {
    margin-bottom: 15px;
    text-align: left;
    opacity: 0;
    animation: fadeInBox 1s ease-in-out forwards;
    position: relative;
}

.input-group label {
    display: block;
    font-size: 14px;
    color: #333333;
    margin-bottom: 5px;
}

.input-group input {
    width: 100%;
    padding: 10px;
    border: 1px solid #dddddd;
    border-radius: 5px;
    transition: border-color 0.3s ease, box-shadow 0.3s ease;
}

.input-group input:focus {
    border-color: #003366;
    box-shadow: 0 0 5px rgba(0, 51, 102, 0.2);
}

.input-group button {
    width: 100%;
    padding: 10px;
    background-color: #0056b3;
    color: #ffffff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    transition: background-color 0.3s ease, transform 0.2s ease, box-shadow 0.2s ease;
}

.input-group button:hover {
    background-color: #002244;
    box-shadow: 0 4px 15px rgba(0, 34, 68, 0.2);
}

.input-group button:active {
    transform: scale(0.98);
}

.footer {
    margin-top: 20px;
    font-size: 12px;
    color: #777;
    opacity: 0;
    animation: fadeInBox 1s ease-in-out forwards;
}

.footer a {
    color: #003366;
    text-decoration: none;
}

.footer a:hover {
    color: #002244;
}
</style>   
</body>
</html>
