<?php
include 'database.php'; // Include database connection

// Validate student ID
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $student_id = intval($_GET['id']);

    // Fetch student details and medical records
    $query = "SELECT students.*, medical_records.cbc, medical_records.urine, medical_records.xray 
              FROM students 
              LEFT JOIN medical_records ON students.id = medical_records.student_id 
              WHERE students.id = $student_id";

    $result = mysqli_query($conn, $query);
    $student = mysqli_fetch_assoc($result);

    // If student record not found
    if (!$student) {
        echo "<h3 class='text-danger text-center mt-5'>No medical records found for this student.</h3>";
        exit;
    }
} else {
    echo "<h3 class='text-danger text-center mt-5'>Invalid Student ID.</h3>";
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
    <link rel="stylesheet" href="assets/css/medrecord.css">
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


<div class="record-container">
    <h2 class="text-center text-primary mb-4">Student Medical Records</h2>

    <!-- Student Information -->
    <div class="card mb-4">
        <div class="card-header bg-dark text-white">Student Information</div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4 text-center">
                    <img src="profile.jpg" class="rounded-circle" width="120" alt="Student">
                </div>
                <div class="col-md-8">
                    <p><strong>Name:</strong> 
                        <?php echo "{$student['lastname']}, {$student['firstname']} {$student['middlename']}"; ?>
                    </p>
                    <p><strong>Student Number:</strong> <?php echo $student['student_number']; ?></p>
                    <p><strong>Course:</strong> <?php echo $student['course']; ?></p>
                    <p><strong>Year Level:</strong> <?php echo $student['year_level']; ?></p>
                    <p><strong>Section:</strong> <?php echo $student['section']; ?></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Medical Records -->
    <div class="card">
        <div class="card-header bg-success text-white">Medical Test Results</div>
        <div class="card-body">
            <table class="table table-bordered text-center">
                <thead class="table-dark">
                    <tr>
                        <th>Test</th>
                        <th>Result</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><i class="fas fa-tint icon text-danger"></i> CBC</td>
                        <td><?php echo $student['cbc'] ?? 'Pending'; ?></td>
                        <td>
                            <span class="badge bg-<?php echo ($student['cbc']) ? 'success' : 'warning'; ?> status-badge">
                                <?php echo ($student['cbc']) ? 'Completed' : 'Pending'; ?>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-flask icon text-primary"></i> Urine Test</td>
                        <td><?php echo $student['urine'] ?? 'Pending'; ?></td>
                        <td>
                            <span class="badge bg-<?php echo ($student['urine']) ? 'success' : 'warning'; ?> status-badge">
                                <?php echo ($student['urine']) ? 'Completed' : 'Pending'; ?>
                            </span>
                        </td>
                    </tr>
                    <tr>
                        <td><i class="fas fa-x-ray icon text-info"></i> X-ray</td>
                        <td><?php echo $student['xray'] ?? 'Pending'; ?></td>
                        <td>
                            <span class="badge bg-<?php echo ($student['xray']) ? 'success' : 'warning'; ?> status-badge">
                                <?php echo ($student['xray']) ? 'Completed' : 'Pending'; ?>
                            </span>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Back Button -->
    <div class="text-center mt-4">
        <a href="students.php" class="btn btn-secondary">Back to Student List</a>
    </div>
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
