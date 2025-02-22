<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Clinic Management System</title>
    <link rel="stylesheet" href="assets/css/medstud.css">
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
					<h1>Medical</h1>
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
  <h2>Clinic Management System</h2>
</div>


<div class="tbl-container mt-5">

      <!-- Filter Section -->
<div class="row mb-3">
    <div class="col-md-4" id="filtercourse">
        <label>Course:</label>
        <select id="filterCourse" class="form-control">
            <option value="">All Courses</option>
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
    <div class="col-md-4" id="filteryear">
        <label>Year Level:</label>
        <select id="filterYear" class="form-control">
            <option value="">All Year Level</option>
            <option value="Grade 11">Grade 11</option>
            <option value="Grade 12">Grade 12</option>
            <option value="Grade 11">1st Year</option>
            <option value="Grade 12">2nd Year</option>
            <option value="Grade 11">3rd Year</option>
            <option value="Grade 12">4th Year</option>
        </select>
    </div>
    <div class="col-md-4" id="filtersection">
        <label>Section:</label>
        <input type="text" id="filterSection" class="form-control" placeholder="Enter Section">
    </div>
    <div class="col-md-3" id="filternumber">
        <label>Student Number:</label>
        <input type="text" id="filterStudentNumber" class="form-control" placeholder="Enter Student Number">
    </div>
</div>

    <a href="medicalform.php" class="btn btn-primary mb-3" id="btnadd">Add New Student</a>

    <table class="table table-bordered" id="tblmed">
    <thead class="table-dark" id="thead-stud">
        <tr>
            <th id="tblth">Student Number</th>
            <th id="tblth">Full Name</th>
            <th id="tblth">Section</th>
            <th id="tblth">Course</th>
            <th id="tblth">Year Level</th>
            <th id="tblth">Actions</th>
        </tr>
    </thead>
    <tbody id="studentTableBody">
        
        <!-- Data will be inserted here using AJAX -->
    </tbody>
</table>

    

</div>
<div class="modal fade" id="studentModal" tabindex="-1" aria-labelledby="studentModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="studentModalLabel">Student Information</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Student Profile at the Top -->
                <div class="student-profile">
                    <img src="default-profile.png" id="modal_student_image" alt="Student Profile">
                </div>

                <!-- Personal Information Section -->
                <h6 class="fw-bold mt-3">Personal Information</h6>
                <div class="student-info-container">
                    <div class="form-group">
                        <label class="form-label">First Name</label>
                        <input type="text" class="form-control" id="modal_firstname" readonly>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="modal_lastname" readonly>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Middle Name</label>
                        <input type="text" class="form-control" id="modal_middlename" readonly>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Gender</label>
                        <input type="text" class="form-control" id="modal_gender" readonly>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Age</label>
                        <input type="text" class="form-control" id="modal_age" readonly>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Address</label>
                        <input type="text" class="form-control" id="modal_address" readonly>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" id="modal_email" readonly>
                    </div>
                </div>

                <!-- Divider -->
                <div class="divider"></div>

                <!-- Academic Information Section -->
                <h6 class="fw-bold mt-3">Academic Information</h6>
                <div class="student-info-container">
                    <div class="form-group">
                        <label class="form-label">Student Number</label>
                        <input type="text" class="form-control" id="modal_student_number" readonly>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Course</label>
                        <input type="text" class="form-control" id="modal_course" readonly>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Year Level</label>
                        <input type="text" class="form-control" id="modal_year_level" readonly>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Section</label>
                        <input type="text" class="form-control" id="modal_section" readonly>
                    </div>
                </div>

                <!-- Divider -->
                <div class="divider"></div>

                <!-- Contact & Health Details Section -->
                <h6 class="fw-bold mt-3">Contact & Health Information</h6>
                <div class="student-info-container">
                    <div class="form-group">
                        <label class="form-label">Contact Number</label>
                        <input type="text" class="form-control" id="modal_contact_number" readonly>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Parent's Contact</label>
                        <input type="text" class="form-control" id="modal_parent_contact" readonly>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Disability Status</label>
                        <input type="text" class="form-control" id="modal_disability_status" readonly>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Disease</label>
                        <input type="text" class="form-control" id="modal_illness" readonly>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Allergies</label>
                        <input type="text" class="form-control" id="modal_allergies" readonly>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Blood Type</label>
                        <input type="text" class="form-control" id="modal_blood_type" readonly>
                    </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


<!-- Footer -->
<footer class="footer">
  <div class="footer-container">
    <p>&copy; 2025 Clinic Management System. All rights reserved.</p>
    <p>Developed by <strong>Abargos and Forcado</strong></p>
  </div>
</footer>
    
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
            section: $("#filterSection").val(),
            student_number: $("#filterStudentNumber").val()
        }, function(data) {
            $("#studentTableBody").html(data); // Update table body with filtered data
        });
    }

    // Trigger filtering when selection changes
    $("#filterCourse, #filterYear, #filterSection, #filterStudentNumber").on("change keyup", fetchStudents);

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

<script>
    function viewStudent(id) {
    $.post("view_student.php", { id: id }, function(data) {
        $("#studentDetailsBody").html(data);
        $("#viewStudentModal").modal("show");
    });
}
</script>
<script>
  function viewStudent(id) {
    $.ajax({
        url: 'get_student.php',
        type: 'GET',
        data: { id: id },
        dataType: 'json',
        success: function(student) {
            if (student.error) {
                alert(student.error);
            } else {
                console.log("Profile Image Path:", student.profile_image); // Debugging

                let imagePath = student.profile_image ? student.profile_image : 'assets/images/clinlogo.jpg';
                $('#modal_student_image').attr('src', imagePath); // Set the image

                $('#modal_firstname').val(student.firstname);
                $('#modal_lastname').val(student.lastname);
                $('#modal_middlename').val(student.middlename);
                $('#modal_student_number').val(student.student_number);
                $('#modal_course').val(student.course);
                $('#modal_year_level').val(student.year_level);
                $('#modal_section').val(student.section);
                $('#modal_gender').val(student.gender);
                $('#modal_age').val(student.age);
                $('#modal_address').val(student.address);
                $('#modal_email').val(student.email);
                $('#modal_contact_number').val(student.contact_number);
                $('#modal_parent_contact').val(student.parent_contact);
                $('#modal_disability_status').val(student.disability_status);
                $('#modal_illness').val(student.illness);
                $('#modal_allergies').val(student.allergies);
                $('#modal_blood_type').val(student.blood_type);

                $('#studentModal').modal('show');
            }
        }
    });
}

</script>
</body>
</html>
