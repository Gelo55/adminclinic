
<?php
include 'database.php';

if (isset($_GET['viewid'])) {
    $id = $_GET['viewid'];
    $sql = "SELECT * FROM `admit` WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        $row = mysqli_fetch_assoc($result);
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
    }
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
    <link rel="stylesheet" href="assets/css/viewadmit.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>

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
            background-color: white;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            width: 60%;
            height: 490px;
            margin: auto;
            position: relative;
            top: 3%;
        }
        .card-header {
            background-color:  black;
            color: white;
            padding: 15px;
            text-align: center;
            border-radius: 10px 10px 0 0;
        }
        .card-body {
            padding: 20px;
        }
        .row {
            margin-bottom: 15px;
        }
        #back {
            display: block;
            margin: 20px auto;
            width: 100px;
            text-align: center;
            padding: 10px;
            border-radius: 5px;
            background-color: black;
            color: white;
            position: relative;
            left: -40%;
            top: -10%;
        }
        .btn-secondary {
            background-color:  #033683;
        }
    </style>

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

    <div class="head-title">
				<div class="left">
					<h1>View Admit</h1>
				</div>
    </div> 

<!-- main -->
<!-- SIDEBAR -->
<!--#################################################################################-->

    <div class="container">
        
<!-- frame -->
<div class= "frame">

<div class="card">
        <div class="card-header">
            <h2>Admit</h2>
        </div>
        <div class="card-body">
            <div class="row">
            <div class="input-container">
            <form method="post" class="form-container">
                <div class="form-group">
                    <label for="type">Type</label>
                    <input list="type" name="type" required value="<?php echo htmlspecialchars($type); ?>" readonly>
                    <datalist id="type">
                        <option value="Student"></option>
                        <option value="Professor"></option>
                    </datalist>
                </div>
                <div class="form-group">
                    <label for="firstname">First Name</label>
                    <input type="text" name="firstname" required value="<?php echo htmlspecialchars($firstname); ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="lastname">Last Name</label>
                    <input type="text" name="lastname" required value="<?php echo htmlspecialchars($lastname); ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="middlename">Middle Name</label>
                    <input type="text" name="middlename" value="<?php echo htmlspecialchars($middlename); ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="course">Course/Department</label>
                    <input list="course" name="course" required value="<?php echo htmlspecialchars($course); ?>" readonly>
                    <datalist id="course">
                        <option value="STEM"></option>
                        <option value="ABM"></option>
                        <option value="BSIT"></option>
                    </datalist>
                </div>
                <div class="form-group">
                    <label for="year_level">Year Level</label>
                    <input list="year_level" name="year_level" required value="<?php echo htmlspecialchars($year_level); ?>" readonly>
                    <datalist id="year_level">
                        <option value="Grade 11"></option>
                        <option value="1st Year"></option>
                    </datalist>
                </div>
                <div class="form-group">
                    <label for="section">Section</label>
                    <input list="section" name="section" required value="<?php echo htmlspecialchars($section); ?>" readonly>
                    <datalist id="section">
                        <option value="001"></option>
                        <option value="002"></option>
                    </datalist>
                </div>
                <div class="form-group">
                    <label for="disease">Disease/Injured</label>
                    <input type="text" name="disease" value="<?php echo htmlspecialchars($disease); ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="medicine">Medicine</label>
                    <input list="medicine" name="medicine" required value="<?php echo htmlspecialchars($medicine); ?>" readonly>
                    <datalist id="medicine">
                        <option value="Paracetamol"></option>
                        <option value="Ibuprofen"></option>
                    </datalist>
                </div>
                <div class="form-group">
                    <label for="brand">Brand</label>
                    <input list="brand" name="brand" required value="<?php echo htmlspecialchars($brand); ?>" readonly>
                    <datalist id="brand">
                        <option value="Biogesic"></option>
                        <option value="Advil"></option>
                    </datalist>
                </div>
                <div class="form-group">
                    <label for="dosage">Dosage</label>
                    <input list="dosage" name="dosage" required value="<?php echo htmlspecialchars($dosage); ?>" readonly>
                    <datalist id="dosage">
                        <option value="100mg"></option>
                        <option value="200mg"></option>
                    </datalist>
                </div>
                <div class="form-group">
                    <label for="date">Date Admit</label>
                    <input type="date" name="date" required value="<?php echo htmlspecialchars($date); ?>" readonly>
                </div>

            </form>
          </div>
            </div>
            </div>
            <a href="admitpatient.php" class="btn btn-primary" id="back">Back</a>
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

</body>
</html>
