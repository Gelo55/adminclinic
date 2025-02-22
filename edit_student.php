<?php
include 'database.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $query = "SELECT * FROM students WHERE id = $id";
    $result = mysqli_query($conn, $query);
    $student = mysqli_fetch_assoc($result);

    if (!$student) {
        echo "Student not found.";
        exit;
    }
} else {
    echo "Invalid Student ID.";
    exit;
}
?>

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

<div class="container mt-5">
    <h2 class="edit-stud">Edit Student Information</h2>
    
    <?php if (isset($_GET['error'])): ?>
        <div class="alert alert-danger"><?php echo $_GET['error']; ?></div>
    <?php endif; ?>
    
    <form action="update_student.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $student['id']; ?>">

        <div class="row">
            <div class="col-md-4">
                <label>First Name</label>
                <input type="text" name="firstname" class="form-control" value="<?php echo htmlspecialchars($student['firstname']); ?>" required>
            </div>

            <div class="col-md-4">
                <label>Last Name</label>
                <input type="text" name="lastname" class="form-control" value="<?php echo htmlspecialchars($student['lastname']); ?>" required>
            </div>

            <div class="col-md-4">
                <label>Middle Name</label>
                <input type="text" name="middlename" class="form-control" value="<?php echo htmlspecialchars($student['middlename']); ?>">
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-4">
                <label>Student Number</label>
                <input type="text" name="student_number" class="form-control" value="<?php echo htmlspecialchars($student['student_number']); ?>" required>
            </div>

            <div class="col-md-4">
                <label>Course</label>
                <select name="course" class="form-control" required>
                    <option value="STEM" <?php if ($student['course'] == 'STEM') echo 'selected'; ?>>STEM</option>
                    <option value="ABM" <?php if ($student['course'] == 'ABM') echo 'selected'; ?>>ABM</option>
                    <option value="HUMSS" <?php if ($student['course'] == 'HUMSS') echo 'selected'; ?>>HUMSS</option>
                    <option value="H.E" <?php if ($student['course'] == 'H.E') echo 'selected'; ?>>H.E</option>
                    <option value="I.C.T" <?php if ($student['course'] == 'I.C.T') echo 'selected'; ?>>I.C.T</option>
                    <option value="GAS" <?php if ($student['course'] == 'GAS') echo 'selected'; ?>>GAS</option>
                    <option value="P.A" <?php if ($student['course'] == 'P.A') echo 'selected'; ?>>P.A</option>
                    <option value="BSIT" <?php if ($student['course'] == 'BSIT') echo 'selected'; ?>>BSIT</option>
                    <option value="BSCRIM" <?php if ($student['course'] == 'BSCRIM') echo 'selected'; ?>>BSCRIM</option>
                    <option value="BLIS" <?php if ($student['course'] == 'BLIS') echo 'selected'; ?>>BLIS</option>
                    <option value="BSHM" <?php if ($student['course'] == 'BSHM') echo 'selected'; ?>>BSHM</option>
                    <option value="BSENTREP" <?php if ($student['course'] == 'BSENTREP') echo 'selected'; ?>>BSENTREP</option>
                    <option value="BSBA" <?php if ($student['course'] == 'BSBA') echo 'selected'; ?>>BSBA</option>
                    <option value="BSAIS" <?php if ($student['course'] == 'BSAIS') echo 'selected'; ?>>BSAIS</option>
                    <option value="BSOA" <?php if ($student['course'] == 'BSOA') echo 'selected'; ?>>BSOA</option>
                    <option value="BPED" <?php if ($student['course'] == 'BPED') echo 'selected'; ?>>BPED</option>
                    <option value="BTLED" <?php if ($student['course'] == 'BTLED') echo 'selected'; ?>>BTLED</option>
                    <option value="BEED" <?php if ($student['course'] == 'BEED') echo 'selected'; ?>>BEED</option>
                    <option value="BSED" <?php if ($student['course'] == 'BSED') echo 'selected'; ?>>BSED</option>
                    <option value="BSTM" <?php if ($student['course'] == 'BSTM') echo 'selected'; ?>>BSTM</option>
                    <option value="BSCpE" <?php if ($student['course'] == 'BSCpE') echo 'selected'; ?>>BSpE</option>
                    <option value="BSP" <?php if ($student['course'] == 'BSP') echo 'selected'; ?>>BSP</option>
                </select>
            </div>

            <div class="col-md-4">
                <label>Year Level</label>
                <select name="year_level" class="form-control" required>
                    <option value="Grade 11" <?php if ($student['year_level'] == 'Grade 11') echo 'selected'; ?>>Grade 11</option>
                    <option value="Grade 12" <?php if ($student['year_level'] == 'Grade 12') echo 'selected'; ?>>Grade 12</option>
                    <option value="1st Year" <?php if ($student['year_level'] == '1st Year') echo 'selected'; ?>>1st Year</option>
                    <option value="2nd Year" <?php if ($student['year_level'] == '2nd Year') echo 'selected'; ?>>2nd Year</option>
                    <option value="3rd Year" <?php if ($student['year_level'] == '3rd Year') echo 'selected'; ?>>3rd Year</option>
                    <option value="4th Year" <?php if ($student['year_level'] == '4th Year') echo 'selected'; ?>>4th Year</option>
                </select>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-4">
                <label>Section</label>
                <select name="section" class="form-control" required>
                    <option value="001" <?php if ($student['gender'] == '001') echo 'selected'; ?>>001</option>
                    <option value="002" <?php if ($student['gender'] == '002') echo 'selected'; ?>>002</option>
                    <option value="003" <?php if ($student['gender'] == '003') echo 'selected'; ?>>003</option>
                    <option value="004" <?php if ($student['gender'] == '004') echo 'selected'; ?>>004</option>
                    <option value="005" <?php if ($student['gender'] == '005') echo 'selected'; ?>>005</option>
                    <option value="006" <?php if ($student['gender'] == '006') echo 'selected'; ?>>006</option>
                    <option value="007" <?php if ($student['gender'] == '007') echo 'selected'; ?>>007</option>
                    <option value="008" <?php if ($student['gender'] == '008') echo 'selected'; ?>>008</option>
                    <option value="009" <?php if ($student['gender'] == '009') echo 'selected'; ?>>009</option>
                    <option value="010" <?php if ($student['gender'] == '010') echo 'selected'; ?>>010</option>
                </select>
            </div>

            <div class="col-md-4">
                <label>Age</label>
                <input type="number" name="age" class="form-control" value="<?php echo $student['age']; ?>" required>
            </div>

            <div class="col-md-4">
                <label>Gender</label>
                <select name="gender" class="form-control" required>
                    <option value="Male" <?php if ($student['gender'] == 'Male') echo 'selected'; ?>>Male</option>
                    <option value="Female" <?php if ($student['gender'] == 'Female') echo 'selected'; ?>>Female</option>
                    <option value="Other" <?php if ($student['gender'] == 'Other') echo 'selected'; ?>>Other</option>
                </select>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-3">
                <label>Address</label>
                <input type="text" name="address" class="form-control" value="<?php echo htmlspecialchars($student['address']); ?>" required>
            </div>

            <div class="col-md-3">
                <label>Email</label>
                <input type="text" name="email" class="form-control" value="<?php echo htmlspecialchars($student['email']); ?>" required>
            </div>

            <div class="col-md-3">
                <label>Contact Number</label>
                <input type="text" name="contact_number" class="form-control" value="<?php echo htmlspecialchars($student['contact_number']); ?>" required>
            </div>

            <div class="col-md-3">
                <label>Parent's Contact Number</label>
                <input type="text" name="parent_contact" class="form-control" value="<?php echo htmlspecialchars($student['parent_contact']); ?>" required>
            </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-3">
                <label>Disability Status</label>
                <select name="disability_status" class="form-control" required>
                    <option value="Normal" <?php if ($student['disability_status'] == 'Normal') echo 'selected'; ?>>Normal</option>
                    <option value="PWD" <?php if ($student['disability_status'] == 'PWD') echo 'selected'; ?>>PWD</option>
    
                </select>
            </div>

            <div class="col-md-3">
                <label>Illness</label>
                <input type="text" name="illness" class="form-control" value="<?php echo htmlspecialchars($student['illness']); ?>">
            </div>

            <div class="col-md-3">
                <label>Allergies</label>
                <input type="text" name="allergies" class="form-control" value="<?php echo htmlspecialchars($student['allergies']); ?>">
            </div>

            <div class="col-md-3">
                <label>Blood_type</label>
                <select name="blood_type" class="form-control" required>
                    <option value="" <?php if ($student['blood_type'] == 'Select Blood Type') echo 'selected'; ?>>Select Blood Type</option>
                    <option value="A" <?php if ($student['blood_type'] == 'A') echo 'selected'; ?>>A</option>
                    <option value="B" <?php if ($student['blood_type'] == 'B') echo 'selected'; ?>>B</option>
                    <option value="AB" <?php if ($student['blood_type'] == 'AB') echo 'selected'; ?>>AB</option>
                    <option value="O" <?php if ($student['blood_type'] == 'O') echo 'selected'; ?>>O</option>
                    <option value="A+" <?php if ($student['blood_type'] == 'A+') echo 'selected'; ?>>A+</option>
                    <option value="A-" <?php if ($student['blood_type'] == 'A-') echo 'selected'; ?>>A-</option>
                    <option value="b+" <?php if ($student['blood_type'] == 'B+') echo 'selected'; ?>>B+</option>
                    <option value="B-" <?php if ($student['blood_type'] == 'B-') echo 'selected'; ?>>B-</option>
                    <option value="AB+" <?php if ($student['blood_type'] == 'AB+') echo 'selected'; ?>>AB+</option>
                    <option value="AB-" <?php if ($student['blood_type'] == 'AB-') echo 'selected'; ?>>AB-</option>
                    <option value="O+" <?php if ($student['blood_type'] == 'O+') echo 'selected'; ?>>O+</option>
                    <option value="O-" <?php if ($student['blood_type'] == 'O-') echo 'selected'; ?>>O-</option>
                </select>
                </select>
            </div>
        </div>

        <div class="row mt-4">
            <div class="col-md-12">
                <button type="submit" class="btn btn-success" id="btnupdate">Update Student</button>
                <a href="medicalstudent.php" class="btn btn-secondary">Cancel</a>
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
            $("#studentTable tbody").html(data);
        });
    }

    $("#filterCourse, #filterYear, #filterSection").change(fetchStudents);
});

    </script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function() {
    $("#studentForm").submit(function(event) {
        event.preventDefault();
        
        let formData = $(this).serialize();

        $.post("insert_update_student.php", formData, function(response) {
            alert(response);
            $("#studentForm")[0].reset();
            $("#studentId").val('');
        });
    });
});
</script>

</body>
</html>
