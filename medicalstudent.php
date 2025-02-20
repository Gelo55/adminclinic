<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Clinic Management System</title>
    <link rel="stylesheet" href="assets/css/medical.css">
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

<div class="cliniclogo">
  <img src="assets/images/clinlogo.jpg" alt="" class="clinlogo">
  <h2>Senior High School Medical</h2>
</div>


<div class="tbl-container mt-5">
    <h2 class="mb-3">Student Records</h2>

      <!-- Filter Section -->
<div class="row mb-3">
    <div class="col-md-4">
        <label>Filter by Course:</label>
        <select id="filterCourse" class="form-control">
            <option value="">All Courses</option>
            <option value="STEM">STEM</option>
            <option value="ABM">ABM</option>
            <option value="HUMSS">HUMSS</option>
        </select>
    </div>
    <div class="col-md-4">
        <label>Filter by Year Level:</label>
        <select id="filterYear" class="form-control">
            <option value="">All Years</option>
            <option value="Grade 11">Grade 11</option>
            <option value="Grade 12">Grade 12</option>
        </select>
    </div>
    <div class="col-md-4">
        <label>Filter by Section:</label>
        <input type="text" id="filterSection" class="form-control" placeholder="Enter Section">
    </div>
</div>

    <a href="medicalform.php" class="btn btn-primary mb-3">Add New Student</a>

    <table class="table table-bordered">
        <thead class="table-dark">
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Middle Name</th>
                <th>Student Number</th>
                <th>Course</th>
                <th>Year Level</th>
                <th>Section</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Address</th>
                <th>Contact</th>
                <th>Parent Contact</th>
                <th>Disability</th>
                <th>Illness</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody id="studentTableBody">
            <!-- Data will be inserted here using AJAX -->
        </tbody>
    </table>
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
                    contact_number: $("#contact_number").val(),
                    parent_contact: $("#parent_contact").val(),
                    disability_status: $("#disability_status").val(),
                    illness: $("#illness").val()
                };

                $.post("insert_update_student.php", formData, function(response) {
                    alert(response);
                    fetchStudents(); // Reload data
                    $("#studentForm")[0].reset();
                    $("#studentId").val('');
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
            $("#studentTableBody").html(data); // Update table body with filtered data
        });
    }

    // Trigger filtering when selection changes
    $("#filterCourse, #filterYear, #filterSection").on("change keyup", fetchStudents);

    fetchStudents(); // Load initial data
});

    </script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function() {
    function fetchStudents() {
        $.post("fetch_data.php", function(data) {
            $("#studentTableBody").html(data);
        });
    }

    fetchStudents(); // Load data initially
});
</script>
</body>
</html>
