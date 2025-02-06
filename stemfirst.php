

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <title>Clinic Management System</title>
    <link rel="stylesheet" href="assets/css/firstyearstem.css">
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
        <form id="multiStepForm">
            <!-- Step 1: Student Information -->
            <div class="form-step active" id="step1">
                <h2 class="student-title">Student Information</h2>
                <div class="form-group">
                    <label class="label-fname">First Name</label>
                    <input type="text" required id="fname">
                </div>
                <div class="form-group">
                    <label class="label-lname">Last Name</label>
                    <input type="text" required id="lname">
                </div>
                <div class="form-group">
                    <label class="label-mname">Middle Name</label>
                    <input type="text" required id="mname">
                </div>
                <div class="form-group">
                    <label class="label-stid">Student ID</label>
                    <input type="text" required id="stid">
                </div>
                <div class="form-group">
                    <label class="label-sec">Section</label>
                    <input type="text" required id="sec">
                </div>
                <div class="form-group">
                    <label class="label-course">Course</label>
                    <input type="text" required id="course">
                </div>
                <div class="form-group">
                    <label class="label-year">Year Level</label>
                    <input type="number" required id="year">
                </div>
                <div class="form-group">
                    <label class="label-age">Age</label>
                    <input type="number" required id="age">
                </div>
                <div class="form-group">
                    <label class="label-address">Address</label>
                    <input type="text" required id="address">
                </div>
                <div class="form-group">
                    <label class="label-gender">Gender</label>
                    <input type="text" required id="gender">
                </div>
                <div class="form-group">
                    <label class="label-contact">Contact Number</label>
                    <input type="text" required id="contact">
                </div>
                <div class="form-group">
                    <label class="label-parent">Parent's Contact Number</label>
                    <input type="text" required id="parent">
                </div>
                <div class="btn-group">
                    <button type="button" onclick="nextStep(2)">Next</button>
                </div>
            </div>

            <!-- Step 2: Questionnaire -->
            <div class="form-step" id="step2">
                <h2>Questionnaire</h2>
                <p>Do you agree with the terms and conditions?</p>
                <label>
                    <input type="checkbox" name="agree" value="agree"> Agree
                </label>
                <label>
                    <input type="checkbox" name="disagree" value="disagree"> Disagree
                </label>
                <div class="btn-group2">
                    <button type="button" onclick="prevStep(1)">Back</button>
                    <button type="submit">Submit</button>
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

<script>
        function nextStep(step) {
            document.getElementById('step1').classList.remove('active');
            document.getElementById('step2').classList.add('active');
        }
        function prevStep(step) {
            document.getElementById('step2').classList.remove('active');
            document.getElementById('step1').classList.add('active');
        }
    </script>

</body>
</html>
