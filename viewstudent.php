<?php
include 'db.php';

if (isset($_GET['viewid'])) {
    $id = $_GET['viewid'];
    $sql = "SELECT * FROM `information` WHERE id=$id";
    $result = mysqli_query($con, $sql);
    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $firstname = $row['firstname'];
        $lastname = $row['lastname'];
        $middlename = $row['middlename'];
        $suffix = $row['suffix'];
        $gender = $row['gender'];
        $address = $row['address'];
        $contact = $row['contact'];
        $email = $row['email'];
        $studentnumber = $row['studentnumber'];
        $course = $row['course'];
        $year = $row['year'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Student Details</title>
    <style>
        body {
            background-color: #f0f2f5;
        }
        .container {
            margin-top: 50px;
        }
        .card {
            border-radius: 10px;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            width: 60%;
            margin: auto;
            position: relative;
            top: 3%;
        }
        .card-header {
            background-color:  #033683;
            color: white;
            padding: 15px;
            text-align: center;
            border-radius: 10px 10px 0 0;
        }
        .card-body {
            padding: 20px;
        }
        .info-box label {
            font-weight: bold;
            margin-bottom: 5px;
            color: #495057;
            font-size: 14px;
        }
        .info-box input {
            width: 100%;
            padding: 10px;
            background-color: #f8f9fa;
            border: 1px solid #ced4da;
            border-radius: 5px;
            color: #495057;
            font-size: 16px;
            pointer-events: none;
            box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.05);
        }
        .row {
            margin-bottom: 15px;
        }
        .btn {
            display: block;
            margin: 20px auto;
            width: 150px;
            text-align: center;
            padding: 10px;
            border-radius: 5px;
            background-color: #007bff;
            color: white;
        }
        .btn-secondary {
            background-color:  #033683;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="card">
        <div class="card-header">
            <h2>Student Details</h2>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6 info-box">
                    <label for="firstname">First Name</label>
                    <input type="text" id="firstname" value="<?php echo htmlspecialchars($firstname); ?>" readonly>
                </div>
                <div class="col-md-6 info-box">
                    <label for="lastname">Last Name</label>
                    <input type="text" id="lastname" value="<?php echo htmlspecialchars($lastname); ?>" readonly>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 info-box">
                    <label for="middlename">Middle Name</label>
                    <input type="text" id="middlename" value="<?php echo htmlspecialchars($middlename); ?>" readonly>
                </div>
                <div class="col-md-6 info-box">
                    <label for="suffix">Suffix</label>
                    <input type="text" id="suffix" value="<?php echo htmlspecialchars($suffix); ?>" readonly>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 info-box">
                    <label for="gender">Gender</label>
                    <input type="text" id="gender" value="<?php echo htmlspecialchars($gender); ?>" readonly>
                </div>
                <div class="col-md-6 info-box">
                    <label for="address">Address</label>
                    <input type="text" id="address" value="<?php echo htmlspecialchars($address); ?>" readonly>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 info-box">
                    <label for="contact">Contact</label>
                    <input type="text" id="contact" value="<?php echo htmlspecialchars($contact); ?>" readonly>
                </div>
                <div class="col-md-6 info-box">
                    <label for="email">Email</label>
                    <input type="text" id="email" value="<?php echo htmlspecialchars($email); ?>" readonly>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 info-box">
                    <label for="studentnumber">Student Number</label>
                    <input type="text" id="studentnumber" value="<?php echo htmlspecialchars($studentnumber); ?>" readonly>
                </div>
                <div class="col-md-6 info-box">
                    <label for="course">Course</label>
                    <input type="text" id="course" value="<?php echo htmlspecialchars($course); ?>" readonly>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 info-box">
                    <label for="year">Year Level</label>
                    <input type="text" id="year" value="<?php echo htmlspecialchars($year); ?>" readonly>
                </div>
            </div>
            <a href="managestud.php" class="btn btn-secondary">Back</a>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<?php
    }
}
?>
