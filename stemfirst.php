<?php
include 'database.php';

if (!$con) {
    die("Database connection failed: " . mysqli_connect_error());
}

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
    $contact_number = $_POST['contact_number']; // Store as string
    $parent_contact = $_POST['parent_contact']; // Store as string
    $disability_status = $_POST['disability_status'];
    $illness = $_POST['illness'];

    $sql = "INSERT INTO student_db (firstname, lastname, middlename, student_number, section_id, age, gender, address, contact_number, parent_contact, disability_status, illness) 
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $con->prepare($sql);
    if ($stmt === false) {
        die("Error preparing statement: " . $con->error);
    }

    $stmt->bind_param("ssssisssssss", $firstname, $lastname, $middlename, $student_number, $section, $age, $gender, $address, $contact_number, $parent_contact, $disability_status, $illness);

    if (!$stmt->execute()) {
        die("Error executing query: " . $stmt->error);
    } else {
        echo "Record added successfully!";
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
    <link rel="stylesheet" href="assets/css/stemyearfirst.css">
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
                <h2 class="student-title">Student Information</h2>
                <div class="form-group">
                    <label class="label-fname">First Name</label>
                    <input type="text" placeholder="Enter Your First Name" name="firstname" autocomplete="off" id="fname">
                </div>
                <div class="form-group">
                    <label class="label-lname">Last Name</label>
                    <input type="text" placeholder="Enter Your Last Name" name="lastname" autocomplete="off" id="lname">
                </div>
                <div class="form-group">
                    <label class="label-mname">Middle Name</label>
                    <input type="text" placeholder="Enter Your Middle Name" name="middlename" autocomplete="off" id="mname">
                </div>
                <div class="form-group">
                    <label class="label-stid">Student Number</label>
                    <input type="text" placeholder="Enter Your Student Number" name="student_number" autocomplete="off" id="stid">
                </div>

                    <h1 id="important">Important Information</h1>

                <div class="form-group">
                    <label class="label-sec">Section</label>
                  <select name="section" id="sec" required>
                    <option value="">select section</option>
                    <option value="001">001</option>
                    <option value="002">002</option>
                    <option value="003">003</option>
                    <option value="004">004</option>
                    <option value="005">005</option>
                  </select>
                  </div>

                  <div class="form-group">
                    <label class="label-year">Year Level</label>
                  <select name="year_level" id="year" required>
                    <option value="">select year level</option>
                    <option value="grade 11">grade 11</option>
                    <option value="grade 12">gade 12</option>
                  </select>
                  </div>

                  <div class="form-group">
                    <label class="label-course">Course</label>
                  <select name="course" id="course" required>
                    <option value="">select course</option>
                    <option value="bsit">BSIT</option>
                    <option value="bscrim">BSCRIM</option>
                  </select>
                    </div>

                <div class="form-group">
                    <label class="label-age">Age</label>
                    <input type="number" placeholder="Enter Your Age" name="age" autocomplete="off" id="age">
                </div>
                <div class="form-group">
                    <label class="label-address">Address</label>
                    <input type="text" placeholder="Enter Your Address" name="address" autocomplete="off" id="address">
                </div>
                <div class="form-group">
                    <label class="label-gender">Gender</label>
                  <select name="gender" id="gender">
                    <option value="">select gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                 </select>
                </div>

            
                <div class="form-group">
                    <label class="label-contact">Contact Number</label>
                    <input type="text" placeholder="Enter Your Contact Number" name="contact_number" autocomplete="off" id="contact">
                </div>
                <div class="form-group">
                    <label class="label-parent">Parent's Contact Number</label>
                    <input type="text" placeholder="Enter Your Parent's Contact Number" name="parent_contact" autocomplete="off" id="parent">
                </div>

                <div class="form-group">
                    <label class="label-disability">Disability Status</label>
                   <select name="disability_status" id="disability">
                    <option value="">select disability status</option>
                    <option value="normal">Normal</option>
                    <option value="pwd">PWD</option>
                   </select>
                </div>

                <div class="form-group">
                    <label class="label-illness">illness</label>
                   <select name="illness" id="illness">
                    <option value="">select illness</option>
                    <option value="asthma">asthma</option>
                    <option value="cough">cough</option>
                    <option value="flu">flu</option>
                   </select>
                </div>

                <div class="btn-group">
                    <button type="submit" id="btnfirst" name="submit">submit</button>
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



<script>
    $(document).ready(function () {
    $('#course').change(function () {
        var course_id = $(this).val();
        $.ajax({
            url: "fetch_year_levels.php",
            method: "POST",
            data: { course_id: course_id },
            success: function (data) {
                $('#year').html(data);
                $('#sec').html('<option value="">Select Year Level First</option>'); // Reset Section dropdown
            }
        });
    });

    $('#year').change(function () {
        var year_id = $(this).val();
        $.ajax({
            url: "fetch_sections.php",
            method: "POST",
            data: { year_id: year_id },
            success: function (data) {
                $('#sec').html(data);
            }
        });
    });
});
</script>

</body>
</html>
