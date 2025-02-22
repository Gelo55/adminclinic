<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Clinic Management System</title>
    <link rel="stylesheet" href="assets/css/medform.css">
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
					<h1>Medical Senior High School</h1>
				</div>
    </div> 
</div>

<!-- main -->
<!-- SIDEBAR -->
<!--#################################################################################-->

    <div class="container">
        
<!-- frame -->
<div class= "frame">

<div class="stud-container mt-5">
    
    <header><img src="assets/images/clinlogo.jpg" alt="" id="stud-logo"></header>
    <h2 class="medform">Medical Form</h2>

    <form id="studentForm">
        <input type="hidden" id="studentId" name="id">

        <div class="row">
            <div class="col-md-4 mb-3">
                <label>First Name</label>
                <input type="text" id="firstname" name="firstname" class="form-control" required>
            </div>
            <div class="col-md-4 mb-3">
                <label>Last Name</label>
                <input type="text" id="lastname" name="lastname" class="form-control" required>
            </div>
            <div class="col-md-4 mb-4">
                <label>Middle Name</label>
                <input type="text" id="middlename" name="middlename" class="form-control">
            </div>
        </div>

        <div class="row">
            <div class="col-md-2 mb-3">
                <label>Student Number</label>
                <input type="text" id="student_number" name="student_number" class="form-control" required>
            </div>
            <div class="col-md-2 mb-3">
                <label>Course</label>
                <select id="course" name="course" class="form-control">
                    <option value="">Select Course</option>
                    <option value="STEM">STEM</option>
                    <option value="ABM">ABM</option>
                    <option value="HUMSS">HUMSS</option>
                    <option value="H.E">H.E</option>
                    <option value="I.C.T">I.C.T</option>
                    <option value="GAS">GAS</option>
                    <option value="P.A">P.A</option>
                    <option value="BSIT">BSIT</option>
                    <option value="BSCRIM">BSCRIM</option>
                    <option value="BLIS">BLIS</option>
                    <option value="BSHM">BSHM</option>
                    <option value="BSENTREP">BSENTREP</option>
                    <option value="BSBA">BSBA</option>
                    <option value="BSAIS">BSAIS</option>
                    <option value="BSOA">BSOA</option>
                    <option value="BPED">BPED</option>
                    <option value="BTLED">BTLED</option>
                    <option value="BEED">BEED</option>
                    <option value="BSED">BSED</option>
                    <option value="BSTM">BSTM</option>
                    <option value="BSCpE">BSCpE</option>
                    <option value="BSP">BSP</option>
                </select>
            </div>
            <div class="col-md-2 mb-3">
                <label>Year Level</label>
                <select id="year_level" name="year_level" class="form-control">
                    <option value="">Select Year</option>
                    <option value="Grade 11">Grade 11</option>
                    <option value=" Grade 12">Grade 12</option>
                    <option value="1st Year">1st Year</option>
                    <option value=" 2nd Year">2nd Year</option>
                    <option value="3rd Year">3rd Year</option>
                    <option value="4th Year">4th Year</option>
                </select>
            </div>
            <div class="col-md-2 mb-3">
                <label>Section</label>
                <select id="section" name="section" class="form-control">
                    <option value="">Select Section</option>
                    <option value="001">001</option>
                    <option value=" 002">002</option>
                    <option value="003">003</option>
                    <option value="004">004</option>
                    <option value="005">005</option>
                    <option value="006">006</option>
                    <option value="007">007</option>
                    <option value="008">008</option>
                    <option value="009">009</option>
                    <option value="010">010</option>
                </select>
            </div>
            <div class="col-md-2 mb-3">
                <label>Age</label>
                <input type="number" id="age" name="age" class="form-control">
            </div>
            <div class="col-md-2 mb-4">
                <label>Gender</label>
                <select id="gender" name="gender" class="form-control">
                    <option value="">Select Gender</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3 mb-3">
                <label>Address</label>
                <input type="text" id="address" name="address" class="form-control">
            </div>

            <div class="col-md-3 mb-3">
                <label>Email</label>
                <input type="email" id="email" name="email" class="form-control">
            </div>

            <div class="col-md-2 mb-4">
                <label>Contact Number</label>
                <input type="text" id="contact_number" name="contact_number" class="form-control">
            </div>
            <div class="col-md-2 mb-3">
                <label>Parent Contact</label>
                <input type="text" id="parent_contact" name="parent_contact" class="form-control">
            </div>
            <div class="col-md-2 mb-3">
                <label>Disability Status</label>
                <select id="disability_status" name="disability_status" class="form-control">
                    <option value="">Select Disability Status</option>
                    <option value="Normal">Normal</option>
                    <option value="PWD">PWD</option>
                </select>
            </div>
            <div class="col-md-3 mb-3">
                <label>Illness</label>
                <input type="text" id="illness" name="illness" class="form-control">
            </div>
            <div class="col-md-2 mb-3">
                <label>Allergies</label>
                <input type="text" id="allergies" name="allergies" class="form-control">
            </div>
            <div class="col-md-2 mb-3">
                <label>Blood_type</label>
                <select id="blood_type" name="blood_type" class="form-control">
                    <option value="">Select Blood Type</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="AB">AB</option>
                    <option value="O">O</option>
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                </select>
            </div>
        </div>


        <button type="submit" class="btn btn-success" id="btnsave">Save Student</button>
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
        // Get all modal links and modals
        const links = document.querySelectorAll('[data-target]');
        const modals = document.querySelectorAll('.modal');
        const overlay = document.querySelector('.overlay');

        // Open modal
        links.forEach(link => {
            link.addEventListener('click', (e) => {
                e.preventDefault();
                const target = document.getElementById(link.getAttribute('data-target'));
                target.classList.add('active');
                overlay.classList.add('active');
            });
        });

        // Close modal when clicking overlay
        overlay.addEventListener('click', () => {
            modals.forEach(modal => modal.classList.remove('active'));
            overlay.classList.remove('active');
        });
    </script>

<script>
        $(document).ready(function() {
            // Fetch and load student data
            function fetchStudents() {
                $.post("fetch_data.php", function(data) {
                    $("#studentTableBody").html(data);
                });
            }

            fetchStudents(); // Load data initially

            // Handle form submission (Insert/Update)
            $("#studentForm").submit(function(event) {
                event.preventDefault();
                
                let formData = {
                    id: $("#studentId").val(),
                    firstname: $("#firstname").val(),
                    lastname: $("#lastname").val(),
                    middlename: $("#middlename").val(),
                    student_number: $("#student_number").val(),
                    course: $("#course").val(),
                    year_level: $("#year_level").val(),
                    section: $("#section").val(),
                    age: $("#age").val(),
                    gender: $("#gender").val(),
                    address: $("#address").val(),
                    email: $("#email").val(),
                    contact_number: $("#contact_number").val(),
                    parent_contact: $("#parent_contact").val(),
                    disability_status: $("#disability_status").val(),
                    illness: $("#illness").val(),
                    allergies: $("#allergies").val(),
                    blood_type: $("#blood_type").val()
                };
                
                $.post("insert_update_student.php", formData, function(response) {
                    alert(response);
                    fetchStudents(); // Reload data
                    $("#studentForm")[0].reset();
                    $("#studentId").val('');

                     // Redirect to medicalstudent.php after successful submission
        window.location.href = "medicalstudent.php";
                });
            });

            // Handle delete
            function deleteStudent(id) {
                if (confirm("Are you sure you want to delete this student?")) {
                    $.post("delete_student.php", { id: id }, function(response) {
                        alert(response);
                        fetchStudents();
                    });
                }
            }

            window.deleteStudent = deleteStudent;
        });
    </script>

    <script>
        $(document).ready(function() {
    function fetchStudents() {
        $.post("fetch_data.php", {
            course: $("#filterCourse").val(),
            year_level: $("#filterYear").val(),
            section: $("#filterSection").val()
        }, function(data) {
            $("#studentTable tbody").html(data);
        });
    }

    $("#filterCourse, #filterYear, #filterSection").change(fetchStudents);
});

    </script>

</body>
</html>
