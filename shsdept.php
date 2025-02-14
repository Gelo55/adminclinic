<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <title>Clinic Management System</title>
    <link rel="stylesheet" href="assets/css/shsdepartment.css">
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
<!-- SIDEBAR -->

     <!-- main -->
     <div class="container">
    <div class="head-title">
				<div class="left">
					<h1>Student Data</h1>
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
  <h2>SHS Department</h2>
</div>

 <!-- Strand Boxes -->
 <div class="box">
        <header><a href="#" data-target="modal-stem">STEM</a></header>
        <h1 class="stem">Science, Technology, Engineering, <br> and Mathematics</h1>
    </div>

    <div class="box2">
        <header><a href="#" data-target="modal-abm">ABM</a></header>
        <h1 class="abm">Accountancy, Business <br> and Management</h1>
    </div>

    <div class="box3">
        <header><a href="#" data-target="modal-humss">HUMSS</a></header>
        <h1 class="humss">Humanities and Social Sciences</h1>
    </div>

    <div class="box4">
        <header><a href="#" data-target="modal-he">HE</a></header>
        <h1 class="he">Home Economics</h1>
    </div>

    <div class="box5">
        <header><a href="#" data-target="modal-ict">ICT</a></header>
        <h1 class="ict">Information and Communication Technology</h1>
    </div>

    <div class="box6">
        <header><a href="#" data-target="modal-gas">GAS</a></header>
        <h1 class="gas">General Academic Strand</h1>
    </div>

    <div class="box7">
        <header><a href="#" data-target="modal-pa">PA</a></header>
        <h1 class="pa">Performing Arts</h1>
    </div>

    <!-- Modals -->
    <div id="modal-stem" class="modal">
        <h1>Choose Grade Level - STEM</h1>
        <a href="stemfirst.php" class="stem-level">Grade 11</a>
        <a href="grade12_stem.php" class="stem-level">Grade 12</a>
    </div>

    <div id="modal-abm" class="modal">
        <h1>Choose Grade Level - ABM</h1>
        <a href="grade11_abm.php" class="abm-level">Grade 11</a>
        <a href="grade12_abm.php" class="abm-level">Grade 12</a>
    </div>

    <div id="modal-humss" class="modal">
        <h1>Choose Grade Level - HUMSS</h1>
        <a href="grade11_humss.php" class="humss-level">Grade 11</a>
        <a href="grade12_humss.php" class="humss-level">Grade 12</a>
    </div>

    <div id="modal-he" class="modal">
        <h1>Choose Grade Level - HE</h1>
        <a href="grade11_he.php" class="he-level">Grade 11</a>
        <a href="grade12_he.php" class="he-level">Grade 12</a>
    </div>

    <div id="modal-ict" class="modal">
        <h1>Choose Grade Level - ICT</h1>
        <a href="grade11_ict.php" class="ict-level">Grade 11</a>
        <a href="grade12_ict.php" class="ict-level">Grade 12</a>
    </div>

    <div id="modal-gas" class="modal">
        <h1>Choose Grade Level - GAS</h1>
        <a href="grade11_gas.php" class="gas-level">Grade 11</a>
        <a href="grade12_gas.php" class="gas-level">Grade 12</a>
    </div>

    <div id="modal-pa" class="modal">
        <h1>Choose Grade Level - PA</h1>
        <a href="grade11_pa.php" class="pa-level">Grade 11</a>
        <a href="grade12_pa.php" class="pa-level">Grade 12</a>
    </div>

    <!-- Overlay -->
    <div class="overlay"></div>
    
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
