<?php
include 'database.php';

if (isset($_POST['submit'])) {
    $type = $_POST['type'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $middlename = $_POST['middlename'];
    $course = $_POST['course'];
    $year_level = $_POST['year_level'];
    $section = $_POST['section'];
    $disease = $_POST['disease'];
    $medicine = $_POST['medicine'];
    $brand = $_POST['brand'];
    $dosage = $_POST['dosage'];
    $date = $_POST['date'];

    $sql = "INSERT INTO admit (type, firstname, lastname, middlename, course, year_level, section, disease, medicine, brand, dosage, date) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssssssss", $type,  $firstname, $lastname, $middlename, $course, $year_level, $section, $disease, $medicine, $brand, $dosage, $date);
    
    if ($stmt->execute()) {
        header('location:admitpatient.php');
    } else {
        die("Error: " . $stmt->error);
    }
    $stmt->close();
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
    <link rel="stylesheet" href="assets/css/admitstud.css">
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
					<h1>Admit</h1>
					
				</div>
    </div> 
</div>

<!-- main -->
<!-- SIDEBAR -->
<!--#################################################################################-->

    <div class="container">
<!-- frame -->
<div class= "frame">
<div class="card-student">
    <div class="title">Admit Student</div>
    <div class="stats">
        <div>Today<br><strong id="student-today">0</strong></div>
        <div>This Week<br><strong id="student-week">0</strong></div>
        <div>This Month<br><strong id="student-month">0</strong></div>
    </div>
    <div class="progress-bar">
        <div class="progress" id="student-progress" style="width: 0%;"></div>
    </div>
</div>

<div class="card-professor">
    <div class="title">Admit Professor</div>
    <div class="stats">
        <div>Today<br><strong id="professor-today">0</strong></div>
        <div>This Week<br><strong id="professor-week">0</strong></div>
        <div>This Month<br><strong id="professor-month">0</strong></div>
    </div>
    <div class="progress-bar">
        <div class="progress" id="professor-progress" style="width: 0%;"></div>
    </div>
</div>

<div class="card-employee">
    <div class="title">Other</div>
    <div class="stats">
        <div>Today<br><strong id="other-today">0</strong></div>
        <div>This Week<br><strong id="other-week">0</strong></div>
        <div>This Month<br><strong id="other-month">0</strong></div>
    </div>
    <div class="progress-bar">
        <div class="progress" id="other-progress" style="width: 0%;"></div>
    </div>
</div>

        <button id="openModalBtn" class="btn btn-primary">Admit Patient</button>
    
    <div id="admitModal" class="modal">
        <div class="modal-content">
            <span class="close" id="closeModalBtn">&times;</span>
            <h2>Admit</h2>
            <form method="post" class="form-container">
                <div class="form-group">
                    <label for="type">Type</label>
                    <input list="type" name="type" required>
                    <datalist id="type">
                        <option value="Student"></option>
                        <option value="Professor"></option>
                        <option value="Other"></option>
                    </datalist>
                </div>
                <div class="form-group">
                    <label for="firstname">First Name</label>
                    <input type="text" name="firstname" required>
                </div>
                <div class="form-group">
                    <label for="lastname">Last Name</label>
                    <input type="text" name="lastname" required>
                </div>
                <div class="form-group">
                    <label for="middlename">Middle Name</label>
                    <input type="text" name="middlename">
                </div>
                <div class="form-group">
                    <label for="course">Course/Department</label>
                    <input list="course" name="course" required>
                    <datalist id="course">
                        <option value="STEM"></option>
                        <option value="ABM"></option>
                        <option value="HUMSS"></option>
                        <option value="H.E"></option>
                        <option value="I.C.T"></option>
                        <option value="GAS"></option>
                        <option value="P.A"></option>
                        <option value="BSIT"></option>
                        <option value="BSCRIM"></option>
                        <option value="BLIS"></option>
                        <option value="BSHM"></option>
                        <option value="BSENTREP"></option>
                        <option value="BSBA"></option>
                        <option value="BSAIS"></option>
                        <option value="BSOA"></option>
                        <option value="BPED"></option>
                        <option value="BTLED"></option>
                        <option value="BEED"></option>
                        <option value="BSED"></option>
                        <option value="BSTM"></option>
                        <option value="BSCpE"></option>
                        <option value="BSP"></option>
                    </datalist>
                </div>
                <div class="form-group">
                    <label for="year_level">Year Level</label>
                    <input list="year_level" name="year_level" required>
                    <datalist id="year_level">
                        <option value="Grade 11"></option>
                        <option value="Grade 12"></option>
                        <option value="1st Year"></option>
                        <option value="2nd Year"></option>
                        <option value="3rd Year"></option>
                        <option value="4th Year"></option>
                    </datalist>
                </div>
                <div class="form-group">
                    <label for="section">Section</label>
                    <input list="section" name="section" required>
                    <datalist id="section">
                        <option value="001"></option>
                        <option value="002"></option>
                        <option value="003"></option>
                        <option value="004"></option>
                        <option value="005"></option>
                        <option value="006"></option>
                        <option value="007"></option>
                        <option value="008"></option>
                        <option value="009"></option>
                        <option value="010"></option>
                    </datalist>
                </div>
                <div class="form-group">
                    <label for="disease">Disease/Injured</label>
                    <input type="text" name="disease">
                </div>
                <div class="form-group">
                    <label for="medicine">Medicine</label>
                    <input list="medicine" name="medicine" required>
                    <datalist id="medicine">
                    <option value="Paracetamol"></option>
                    <option value="ibuprofen"></option>
                    <option value="Mefenamic"></option>
                    <option value="Antihistamines"></option>
                    <option value="Antacids"></option>
                    <option value="Cough"></option>
                    <option value="Anti-Diamheal"></option>
                    </datalist>
                </div>
                <div class="form-group">
                    <label for="brand">Brand</label>
                    <input list="brand" name="brand" required>
                    <datalist id="brand">
                    <option value="Biogesic"></option>
                    <option value="Advil"></option>
                    <option value="Medicol"></option>
                    <option value="Alaxan FR"></option>
                    <option value="Ponstan"></option>
                    <option value="Dolfenal"></option>
                    <option value="Cetirizine"></option>
                    <option value="Kremil-S"></option>
                    <option value="Robityssin"></option>
                    <option value="Solmux"></option>
                    <option value="Tuseran Forte"></option>
                    <option value="Neozep"></option>
                    <option value="Decolgen"></option>
                    <option value="Bioflu"></option>
                    <option value="Diatabs"></option>
                    <option value="Imodium"></option>
                    </datalist>
                </div>
                <div class="form-group">
                    <label for="dosage">Dosage</label>
                    <input list="dosage" name="dosage" required>
                    <datalist id="dosage">
                    <option value="100mg"></option>
                    <option value="150mg"></option>
                    <option value="200mg"></option>
                    <option value="250mg"></option>
                    <option value="300mg"></option>
                    <option value="350mg"></option>
                    <option value="400mg"></option>
                    <option value="450mg"></option>
                    <option value="500mg"></option>
                    </datalist>
                </div>
                <div class="form-group">
                    <label for="date">Date Admit</label>
                    <input type="date" name="date" required>
                </div>
                
                <button type="submit" name="submit" class="btn btn-primary" onclick="return confirmAdmit()">ADD</button>

            </form>
        </div>
    </div>
    

<div class="crud-container">
    <div style="display: flex; justify-content: space-between; align-items: center;">
        
        <!-- Search Bar -->
        <form action="" method="GET" style="margin-right: 20px; margin-top: 5%;" id="search-box">
            <input type="text" name="search" placeholder="Search Student" class="form-control" style="display: inline-block; width: 250px;">
            <button type="submit" class="btn btn-primary" id="btn-searchbar">Search</button>
        </form>
    </div>

    <table class="table-container">
        <thead>
            <tr>
                <th>id</th>
                <th>Type:</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Middlename</th>
                <th>Course</th>
                <th>Year Level</th>
                <th>Section</th>
                <th>Disease/Injured</th>
                <th>Medicine</th>
                <th>Brand</th>
                <th>Dosage</th>
                <th>Date Admit</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php 
        // Establishing database connection
        include 'database.php'; // Include your database connection file

        // Check if a search query is submitted
        if (isset($_GET['search'])) {
            $search = mysqli_real_escape_string($conn, $_GET['search']);
            // Search query with LIKE clause
            $sql = "SELECT * FROM `admit` WHERE `firstname` LIKE '%$search%' OR `lastname` LIKE '%$search%' OR `middlename` LIKE '%$search%'";
        } else {
            // Default query to display all students
            $sql = "SELECT * FROM `admit`";
        }
        
        $result = mysqli_query($conn, $sql);
        
        if ($result) {
            while($row = mysqli_fetch_assoc($result)){
                $id = $row['id'];
                $type = $row['type'];
                $firstname = $row['firstname'];
                $lastname = $row['lastname'];
                $middlename = $row['middlename'];
                $course = $row['course'];
                $year_level = $row['year_level'];
                $section = $row['section'];
                $disease = $row['disease'];
                $medicine = $row['medicine'];
                $brand = $row['brand'];
                $dosage = $row['dosage'];
                $date = $row['date'];
               
                echo '<tr>
                <th>'.$id.'</th>
                <td>'.$type.'</td>
                <td>'.$firstname.'</td>
                <td>'.$lastname.'</td>
                <td>'.$middlename.'</td>
                <td>'.$course.'</td>
                <td>'.$year_level.'</td>
                <td>'.$section.'</td>
                <td>'.$disease.'</td>
                <td>'.$medicine.'</td>
                <td>'.$brand.'</td>
                <td>'.$dosage.'</td>
                <td>'.$date.'</td>
                <td>
                    <button class="btn btn-primary" id="btn-second">
                        <a href="updateadmit.php?updateid='.$id.'"><i class="fas fa-pen"></i></a>
                    </button>
                    <button class="btn btn-danger" id="btn-third">
                        <a href="deleteadmit.php?deleteid='.$id.'"><i class="fas fa-trash"></i></a>
                    </button>
                    <button class="btn btn-info" id="btn-fourth">
                        <a href="viewadmit.php?viewid='.$id.'" class="text-light"><i class="fas fa-eye"></i></a>
                    </button>
                </td>
                </tr>';
            }
        }
        ?>
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
        document.getElementById("openModalBtn").addEventListener("click", function() {
            document.getElementById("admitModal").style.display = "block";
        });
        
        document.getElementById("closeModalBtn").addEventListener("click", function() {
            document.getElementById("admitModal").style.display = "none";
        });
        
        window.addEventListener("click", function(event) {
            if (event.target == document.getElementById("admitModal")) {
                document.getElementById("admitModal").style.display = "none";
            }
        });
    </script>

<script>
    function updateCounts() {
        fetch('get_counts.php')
            .then(response => response.json())
            .then(data => {
                // Update Student Counts & Progress
                document.getElementById("student-today").innerText = data.student.today;
                document.getElementById("student-week").innerText = data.student.week;
                document.getElementById("student-month").innerText = data.student.month;
                document.getElementById("student-progress").style.width = data.student.progress + "%";

                // Update Professor Counts & Progress
                document.getElementById("professor-today").innerText = data.professor.today;
                document.getElementById("professor-week").innerText = data.professor.week;
                document.getElementById("professor-month").innerText = data.professor.month;
                document.getElementById("professor-progress").style.width = data.professor.progress + "%";

                // Update Other Counts & Progress
                document.getElementById("other-today").innerText = data.other.today;
                document.getElementById("other-week").innerText = data.other.week;
                document.getElementById("other-month").innerText = data.other.month;
                document.getElementById("other-progress").style.width = data.other.progress + "%";
            })
            .catch(error => console.error('Error fetching data:', error));
    }

    // Run on page load and refresh every 10 seconds
    document.addEventListener("DOMContentLoaded", () => {
        updateCounts();
        setInterval(updateCounts, 10000);
    });
</script>

<script>
    function confirmAdmit() {
        const confirmation = confirm("Are you sure you want to admit this patient?");
        return confirmation; // If true, the form will be submitted. If false, submission will be stopped.
    }
</script>

</body>
</html>
