<?php
include 'database.php';

$id = null; // Default value to prevent undefined variable issues

if (isset($_GET['updateid'])) {
    $id = (int)$_GET['updateid']; // Ensure ID is an integer
}

// Validate if ID is set
if (!$id) {
    die("Invalid or missing student ID.");
}

// Corrected SELECT query
$sql = "SELECT * FROM students WHERE id = ?";
$stmt = $con->prepare($sql);
$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

if ($row = $result->fetch_assoc()) {
    // Fetch existing student data
    $firstname = $row['firstname'];
    $lastname = $row['lastname'];
    $middlename = $row['middlename'];
    $student_number = $row['student_number'];
    $course = $row['course'];
    $year_level = $row['year_level'];
    $section = $row['section'];
    $age = $row['age'];
    $gender = $row['gender'];
    $address = $row['address'];
    $contact_number = $row['contact_number'];
    $parent_contact = $row['parent_contact'];
} else {
    die("Student not found.");
}

$stmt->close();

// If the update form is submitted
if (isset($_POST['submit'])) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $middlename = $_POST['middlename'];
    $student_number = $_POST['student_number'];
    $course = $_POST['course'];
    $year_level = $_POST['year_level'];
    $section = $_POST['section'];
    $age = (int)$_POST['age'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $contact_number = $_POST['contact_number']; // No need to cast to int (can have dashes)
    $parent_contact = $_POST['parent_contact']; // No need to cast to int

    // Use a prepared statement to prevent SQL injection
    $sql = "UPDATE students SET firstname=?, lastname=?, middlename=?, student_number=?, course=?, year_level=?, section=?, age=?, gender=?, address=?, contact_number=?, parent_contact=? WHERE id=?";
    
    $stmt = $con->prepare($sql);
    
    if ($stmt === false) {
        die("Error preparing statement: " . $con->error);
    }

    // Bind parameters correctly
    $stmt->bind_param("sssssssissssi", $firstname, $lastname, $middlename, $student_number, $course, $year_level, $section, $age, $gender, $address, $contact_number, $parent_contact, $id);

    if ($stmt->execute()) {
        echo '<script>
                alert("Updated successfully!");
                window.location.href = "firststemdata.php"; // Redirect after update
              </script>';
        exit();
    } else {
        die("Error executing statement: " . $stmt->error);
    }

    $stmt->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <title>Clinic Management System</title>
    <link rel="stylesheet" href="assets/css/stemfirstyear.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
</head>
<body>
<?php include "sidenav.php"; ?>
</div>
<div id="uppernav" >
    <div class="upnav">
    <button class="openbtn" onclick="toggleNav()">☰</button>
  </div>
</div>
<!-- SIDEBAR -->

     <!-- main -->
     <div class="container">
    <div class="head-title">
				<div class="left">
					<h1>1st Year - STEM</h1>
					
				</div>
    </div> 
</div>

<!-- main -->
<!-- SIDEBAR -->
<!--#################################################################################-->

    <div class="container">
        
<!-- frame -->
<div class= "frame">

<div class="form-container">
        <form method="POST">
            <!-- Step 1: Student Information -->
            <div class="form-step active" id="step1">
                <h2 class="student-title">Student Information</h2>
                <div class="form-group">
                    <label class="label-fname">First Name</label>
                    <input type="text" placeholder="Enter Your First Name" name="firstname" autocomplete="off" id="fname" value=<?php echo $firstname; ?>>
                </div>
                <div class="form-group">
                    <label class="label-lname">Last Name</label>
                    <input type="text" placeholder="Enter Your Last Name" name="lastname" autocomplete="off" id="lname" value=<?php echo $lastname; ?>>
                </div>
                <div class="form-group">
                    <label class="label-mname">Middle Name</label>
                    <input type="text" placeholder="Enter Your Middle Name" name="middlename" autocomplete="off" id="mname" value=<?php echo $middlename; ?>>
                </div>
                <div class="form-group">
                    <label class="label-stid">Student Number</label>
                    <input type="text" placeholder="Enter Your Student Number" name="student_number" autocomplete="off" id="stid" value=<?php echo $student_number; ?>>
                </div>
                <div class="form-group">
                    <label class="label-sec">Section</label>
                    <input type="text" placeholder="Enter Your section" name="section" autocomplete="off" id="sec" value=<?php echo $section; ?>>
                </div>
                <div class="form-group">
                    <label class="label-course">Course</label>
                    <input type="text" placeholder="Enter Your Course" name="course" autocomplete="off" id="course" value=<?php echo $course; ?>>
                </div>
                <div class="form-group">
                    <label class="label-year">Year Level</label>
                    <input type="text" placeholder="Enter Your Year Level" name="year_level" autocomplete="off" id="year" value=<?php echo $year_level; ?>>
                </div>
                <div class="form-group">
                    <label class="label-age">Age</label>
                    <input type="number" placeholder="Enter Your Age" name="age" autocomplete="off" id="age" value=<?php echo $age; ?>>
                </div>
                <div class="form-group">
                    <label class="label-address">Address</label>
                    <input type="text" placeholder="Enter Your Address" name="address" autocomplete="off" id="address" value=<?php echo $address; ?>>
                </div>
                <div class="form-group">
                    <label class="label-gender">Gender</label>
                    <input type="text" placeholder="Enter Your Gender" name="gender" autocomplete="off"  id="gender" value=<?php echo $gender; ?>>
                </div>
                <div class="form-group">
                    <label class="label-contact">Contact Number</label>
                    <input type="text" placeholder="Enter Your Contact Number" name="contact_number" autocomplete="off" id="contact" value=<?php echo $contact_number; ?>>
                </div>
                <div class="form-group">
                    <label class="label-parent">Parent's Contact Number</label>
                    <input type="text" placeholder="Enter Your Parent's Contact Number" name="parent_contact" autocomplete="off" id="parent" value=<?php echo $parent_contact; ?>>
                </div>
                <div class="btn-group">
                    <button type="submit" id="btnfirst" name="submit">Update</button>
                </div>
            </div>
        </form>
    </div>

    </div>
</div>


    <script type="text/javascript">
    function toggleNav() {
    const sidenav = document.getElementById("sidenav");
    const uppernav = document.getElementById("uppernav");

    if (sidenav.style.left === "0px") {
        sidenav.style.left = "-280px";
        uppernav.style.marginLeft = "0";
    } else {
        sidenav.style.left = "0";
        uppernav.style.marginLeft = "280px";
    }
}

var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}


    </script>

<script>
  document.getElementById("bell-icon").addEventListener("click", function(event) {
    event.preventDefault();
    const notificationBox = document.getElementById("notification-box");
    notificationBox.classList.toggle("active"); // Toggle visibility
});

</script>

<script>
  document.getElementById("settings-icon").addEventListener("click", function(event) {
    event.preventDefault();
    const dropdown = document.getElementById("settings-dropdown-menu");
    dropdown.classList.toggle("active"); // Toggle the dropdown visibility
});
</script>

</body>
</html>
