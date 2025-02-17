<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Clinic Management System</title>
    <link rel="stylesheet" href="assets/css/college.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
</head>
<body>
<?php include "sidenav.php"; ?>
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
  <h2>College Department</h2>
</div>

 <!-- Strand Boxes -->
 <div class="box">
        <header><a href="#" data-target="modal-bsit">BSIT</a></header>
        <h1 class="bsit">Bachelor of Science in  <br> Information Technology</h1>
    </div>

    <div class="box2">
        <header><a href="#" data-target="modal-bscrim">BSCRIM</a></header>
        <h1 class="bscrim">Bachelor of Science in Criminology</h1>
    </div>

    <div class="box3">
        <header><a href="#" data-target="modal-blis">BLIS</a></header>
        <h1 class="blis">Bachelor of Library <br> Information Science</h1>
    </div>


    <div class="box4">
        <header><a href="#" data-target="modal-bshm">BSHM</a></header>
        <h1 class="bshm">Bachelor of Science in<br> Hospitality Management</h1>
    </div>

    <div class="box5">
        <header><a href="#" data-target="modal-bsentrep">BSENTREP</a></header>
        <h1 class="bsentrep">Bachelor of Science in <br> Entrepreneurship</h1>
    </div>

    <div class="box6">
        <header><a href="#" data-target="modal-bsba">BSBA</a></header>
        <h1 class="bsba">Bachelor of Science in <br> Business Administration</h1>
    </div>

    <div class="box7">
        <header><a href="#" data-target="modal-bsais">BSAIS</a></header>
        <h1 class="bsais">Bachelor of Science in <br> Accounting Information System</h1>
    </div>

    <div class="box8">
        <header><a href="#" data-target="modal-bsoa">BSOA</a></header>
        <h1 class="bsoa">Bachelor of Science in <br> Office Administration</h1>
    </div>

    <div class="box9">
        <header><a href="#" data-target="modal-bped">BPED</a></header>
        <h1 class="bped">Bachelor of Science in <br> Physical Education</h1>
    </div>

    <div class="box10">
        <header><a href="#" data-target="modal-btled">BTLED</a></header>
        <h1 class="btled">Bachelor of Science in <br> Technological & Livelihood Education</h1>
    </div>

    <div class="box11">
        <header><a href="#" data-target="modal-beed">BEED</a></header>
        <h1 class="beed">Bachelor of Science in <br> Elementary Education</h1>
    </div>

    <div class="box12">
        <header><a href="#" data-target="modal-bsed">BSED</a></header>
        <h1 class="bsed">Bachelor of Science in <br> Secondary Education</h1>
    </div>


    <div class="box13">
        <header><a href="#" data-target="modal-bstm">BSTM</a></header>
        <h1 class="bstm">Bachelor of Science in <br> Tourism Management</h1>
    </div>

    
    <div class="box14">
        <header><a href="#" data-target="modal-bscpe">BSCpE</a></header>
        <h1 class="bscpe">Bachelor of Science in <br> Computer Engineering</h1>
    </div>

    
    <div class="box15">
        <header><a href="#" data-target="modal-bsp">BSP</a></header>
        <h1 class="bsp">Bachelor of Science in Psychology</h1>
    </div>

    <!-- Modals -->
    <div id="modal-bsit" class="modal">
        <h1>Choose Year Level - BSIT</h1>
        <a href="grade11_stem.php" class="bsit-level">1st Year</a>
        <a href="grade12_stem.php" class="bsit-level">2nd Yeaar</a>
        <a href="itmajor.php" class="bsit-level">3rd Yeaar</a>
        <a href="itmajor.php" class="bsit-level">4th Yeaar</a>
    </div>

    <div id="modal-bshm" class="modal">
        <h1>Choose Year Level - BSHM</h1>
        <a href="grade11_stem.php" class="bshm-level">1st Year</a>
        <a href="grade12_stem.php" class="bshm-level">2nd Yeaar</a>
        <a href="grade12_stem.php" class="bshm-level">3rd Yeaar</a>
        <a href="grade12_stem.php" class="bshm-level">4th Yeaar</a>
    </div>

    <div id="modal-bsais" class="modal">
        <h1>Choose Year Level - BSAIS</h1>
        <a href="grade11_stem.php" class="bsais-level">1st Year</a>
        <a href="grade12_stem.php" class="bsais-level">2nd Yeaar</a>
        <a href="grade12_stem.php" class="bsais-level">3rd Yeaar</a>
        <a href="grade12_stem.php" class="bsais-level">4th Yeaar</a>
    </div>

    <div id="modal-bstm" class="modal">
        <h1>Choose Year Level - BSTM</h1>
        <a href="grade11_stem.php" class="bstm-level">1st Year</a>
        <a href="grade12_stem.php" class="bstm-level">2nd Yeaar</a>
        <a href="grade12_stem.php" class="bstm-level">3rd Yeaar</a>
        <a href="grade12_stem.php" class="bstm-level">4th Yeaar</a>
    </div>

    <div id="modal-bsoa" class="modal">
        <h1>Choose Year Level - BSOA</h1>
        <a href="grade11_stem.php" class="bsoa-level">1st Year</a>
        <a href="grade12_stem.php" class="bsoa-level">2nd Yeaar</a>
        <a href="grade12_stem.php" class="bsoa-level">3rd Yeaar</a>
        <a href="grade12_stem.php" class="bsoa-level">4th Yeaar</a>
    </div>

    <div id="modal-bsentrep" class="modal">
        <h1>Choose Year Level - BSENTREP</h1>
        <a href="grade11_stem.php" class="bsentrep-level">1st Year</a>
        <a href="grade12_stem.php" class="bsentrep-level">2nd Yeaar</a>
        <a href="grade12_stem.php" class="bsentrep-level">3rd Yeaar</a>
        <a href="grade12_stem.php" class="bsentrep-level">4th Yeaar</a>
    </div>

    <div id="modal-bsba" class="modal">
        <h1>Choose Year Level - BSBA</h1>
        <a href="majorbsba.php" class="bsba-level">1st Year</a>
        <a href="majorbsba.php" class="bsba-level">2nd Yeaar</a>
        <a href="majorbsba.php" class="bsba-level">3rd Yeaar</a>
        <a href="majorbsba.php" class="bsba-level">4th Yeaar</a>
    </div>

    <div id="modal-blis" class="modal">
        <h1>Choose Year Level - BLIS</h1>
        <a href="grade11_stem.php" class="blis-level">1st Year</a>
        <a href="grade12_stem.php" class="blis-level">2nd Yeaar</a>
        <a href="grade12_stem.php" class="blis-level">3rd Yeaar</a>
        <a href="grade12_stem.php" class="blis-level">4th Yeaar</a>
    </div>

    <div id="modal-bscpe" class="modal">
        <h1>Choose Year Level - BSCpE</h1>
        <a href="grade11_stem.php" class="bscpe-level">1st Year</a>
        <a href="grade12_stem.php" class="bscpe-level">2nd Yeaar</a>
        <a href="grade12_stem.php" class="bscpe-level">3rd Yeaar</a>
        <a href="grade12_stem.php" class="bscpe-level">4th Yeaar</a>
    </div>

    <div id="modal-bsp" class="modal">
        <h1>Choose Year Level - BSP</h1>
        <a href="grade11_stem.php" class="bsp-level">1st Year</a>
        <a href="grade12_stem.php" class="bsp-level">2nd Yeaar</a>
        <a href="grade12_stem.php" class="bsp-level">3rd Yeaar</a>
        <a href="grade12_stem.php" class="bsp-level">4th Yeaar</a>
    </div>

    <div id="modal-bscrim" class="modal">
        <h1>Choose Year Level - BSCRIM</h1>
        <a href="grade11_stem.php" class="bscrim-level">1st Year</a>
        <a href="grade12_stem.php" class="bscrim-level">2nd Yeaar</a>
        <a href="grade12_stem.php" class="bscrim-level">3rd Yeaar</a>
        <a href="grade12_stem.php" class="bscrim-level">4th Yeaar</a>
    </div>

    <div id="modal-bped" class="modal">
        <h1>Choose Year Level - BPED</h1>
        <a href="grade11_stem.php" class="bped-level">1st Year</a>
        <a href="grade12_stem.php" class="bped-level">2nd Yeaar</a>
        <a href="grade12_stem.php" class="bped-level">3rd Yeaar</a>
        <a href="grade12_stem.php" class="bped-level">4th Yeaar</a>
    </div>

    <div id="modal-btled" class="modal">
        <h1>Choose Year Level - BTLED</h1>
        <a href="grade11_stem.php" class="btled-level">1st Year</a>
        <a href="grade12_stem.php" class="btled-level">2nd Yeaar</a>
        <a href="grade12_stem.php" class="btled-level">3rd Yeaar</a>
        <a href="grade12_stem.php" class="btled-level">4th Yeaar</a>
    </div>

    <div id="modal-beed" class="modal">
        <h1>Choose Year Level - BEED</h1>
        <a href="grade11_stem.php" class="beed-level">1st Year</a>
        <a href="grade12_stem.php" class="beed-level">2nd Yeaar</a>
        <a href="grade12_stem.php" class="beed-level">3rd Yeaar</a>
        <a href="grade12_stem.php" class="beed-level">4th Yeaar</a>
    </div>

    <div id="modal-bsed" class="modal">
        <h1>Choose Year Level - BSED</h1>
        <a href="majorbsed.php" class="bsed-level">1st Year</a>
        <a href="majorbsed.php" class="bsed-level">2nd Yeaar</a>
        <a href="majorbsed.php" class="bsed-level">3rd Yeaar</a>
        <a href="majorbsed.php" class="bsed-level">4th Yeaar</a>
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
