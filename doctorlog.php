<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="assets/css/dlogin.css">
</head>
<body>
    <div class="login-container">
        <div class="login-box">
            <img src="assets/images/bcplogo.png" alt="School Logo" class="logo">
            <form action="" method="POST">
                <label for="username">Username :</label>
                <input type="text" id="username" name="username" required>
                
                <label for="password">Password :</label>
                <input type="password" id="password" name="password" required>
                
                <div class="forgot-password">
                    <a href="#">Forgotten your username or password?</a>
                </div>
                
                <button type="submit">Log in</button>
            </form>
        </div>
    </div>
</body>
</html>