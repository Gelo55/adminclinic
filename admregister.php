<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/register1.css">
    <title>Register</title>
</head>
<body>
<div class="register-container">
        <div class="register-box">
            <img src="assets/images/bcplogo.png" alt="School Logo" class="logo">
            <form action="home.php" method="POST">

                <h2>Registration</h2>

                <label for="Firstname">Firstname :</label>
                <input type="text" id="Firstname" name="Firstname" required>
                
                <label for="Lastname">Lastname :</label>
                <input type="text" id="Lastname" name="Lastname" required>
                
                <label for="email">Email :</label>
                <input type="email" id="email" name="email" required>

                <div class="form-group">
                            <input class="form-control form-control-lg" list="gender" name="gender" placeholder="Gender" required autocomplete="off">
                            <datalist id="gender">
                                <option value="Female"></option>
                                <option value="Male"></option>
                              </datalist>
                         </div>

                <div class= "date">
                 <label for="Date">Birthday :</label>
                <input type="date" id="date" name="dateS" required>
                </div>

                <div class=  "address">
                <label for="Contact">Contact :</label>
                <input type="number" id="Contact" name="contact" required>
                </div>
                
                <div class= "password">
                <label for="Password">Password :</label>
                <input type="password" id="password" name="password" required>
                </div>

                <div class= "confirm-password">
                <label for="confirm-Password">Confirm Password :</label>
                <input type="password" id="password" name="confirm-password" required>
                </div>

                <button type="submit">Register</button>
            </form>
        </div>
    </div>
    
</body>
</html>