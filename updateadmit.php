<?php
include 'database.php';

$id = $_GET['updateid'];
$id = intval($id); // Ensure $id is an integer to prevent SQL injection

$sql = "SELECT * FROM `admit` WHERE id = ?";
$stmt = $conn->prepare($sql);

if ($stmt === false) {
    die("Error preparing statement: " . $conn->error);
}

$stmt->bind_param("i", $id);
$stmt->execute();
$result = $stmt->get_result();

// Check if data exists
if ($result && $row = $result->fetch_assoc()) {
    // Pre-populate form fields with fetched data
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
} else {
    die("No data found for this ID.");
}

$stmt->close();

if (isset($_POST['submit'])) {
    // Fetch new values from form
    $type = $_POST['type'];
    $firstname = $_POST['firstname'];
    $lastame = $_POST['lastname'];
    $middlename = $_POST['middlename'];
    $course = $_POST['course'];
    $year_level = $_POST['year_level'];
    $section = $_POST['section'];
    $disease = $_POST['disease'];
    $medicine = $_POST['medicine'];
    $brand = $_POST['brand'];
    $dosage = $_POST['dosage'];
    $date = $_POST['date'];

    // Update query using prepared statement
    $sql = "UPDATE `admit` SET type = ?, firstname = ?, lastname = ?, middlename = ?, course = ?, year_level = ?, section = ?, disease = ?, medicine = ?, brand = ?, dosage = ?, date = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);

    if ($stmt === false) {
        die("Error preparing statement: " . $conn->error);
    }

    // Bind parameters
    $stmt->bind_param("ssssssssssssi", $type, $firstname, $lastname,  $middlename,  $course,  $year_level,  $section,  $disease,  $medicine, $brand,  $dosage, $date, $id);

    // Execute statement
    if ($stmt->execute()) {
        // Redirect after successful update
        header('location: admitpatient.php');
        exit();
    } else {
        die("Error executing statement: " . $stmt->error);
    }

    // Close the statement
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
    <link rel="stylesheet" href="assets/css/updateadmit.css">
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
					<h1>Inventory</h1>
				</div>
    </div> 
</div>

<!-- main -->
<!-- SIDEBAR -->
<!--#################################################################################-->

    <div class="container">
        
<!-- frame -->
<div class= "frame">
 <div class="input-container">
             <h2 class="admit-title">Admit</h2>
            <form method="post" class="form-container">
                <div class="form-group">
                    <label for="type">Type</label>
                    <input list="type" name="type" required value=<?php echo $type;?>>
                    <datalist id="type">
                        <option value="Student"></option>
                        <option value="Professor"></option>
                        <option value="Other"></option>
                    </datalist>
                </div>
                <div class="form-group">
                    <label for="firstname">First Name</label>
                    <input type="text" name="firstname" required value=<?php echo $firstname;?>>
                </div>
                <div class="form-group">
                    <label for="lastname">Last Name</label>
                    <input type="text" name="lastname" required value=<?php echo $lastname;?>>
                </div>
                <div class="form-group">
                    <label for="middlename">Middle Name</label>
                    <input type="text" name="middlename" value=<?php echo $middlename;?>>
                </div>
                <div class="form-group">
                    <label for="course">Course/Department</label>
                    <input list="course" name="course" required value=<?php echo $course;?>>
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
                    <input list="year_level" name="year_level" required value=<?php echo $year_level;?>>
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
                    <input list="section" name="section" required value=<?php echo $section;?>>
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
                    <input type="text" name="disease" value=<?php echo $disease;?>>
                </div>
                <div class="form-group">
                    <label for="medicine">Medicine</label>
                    <input list="medicine" name="medicine" required value=<?php echo $medicine;?>>
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
                    <input list="brand" name="brand" required value=<?php echo $brand;?>>
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
                    <input list="dosage" name="dosage" required value=<?php echo $dosage;?>>
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
                    <input type="date" name="date" required value=<?php echo $date;?>>
                </div>
                <button type="submit" name="submit" class="btn btn-primary" id="btnadmit">Update</button>

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

</body>
</html>
