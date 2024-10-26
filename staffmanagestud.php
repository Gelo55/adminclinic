
<?php

  include 'db.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="assets/css/managestudent.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel= "stylesheet" href= "https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/js/fontawesome.min.js">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Clinic Management System</title>
</head>
<body>
    <!-- SIDEBAR -->
 <div id="sidenav" class="sidenav">
    <img src="assets/images/bcp.png" alt="img" class="bcp">
    <ul class="nav-link">
    <li class="bell">
    <a href="#" id="bell-icon" class="active">
        <i class='bx bx-bell'></i>
    </a>
    <!-- Notification Box -->
    <div id="notification-box" class="notification-box">
        <p><i class="bx bx-bell"></i>No new notifications</p>
        <p class="second-paragraph">When you have notifications,</p> <br> <p class="third-paragraph">they will appear here.</p>
    </div>
</li>
<li class="settings">
    <a href="#" id="settings-icon">
        <i class='bx bx-cog'></i>
    </a>
    <!-- Unique Dropdown Menu -->
    <ul id="settings-dropdown-menu" class="settings-dropdown-menu">
        <li><a href="profile.php">Profile</a></li>
        <li><a href="#">About</a></li>
        <li><a href="index.php">Logout</a></li>
    </ul>
        <img src="assets/images/shore.avif" alt="avatar" class="admin-profile">
        <table class="user-profile">
          <tr>
            <td><span class="user-name"><b>staff name</b></span></td>
          </tr>
          <tr>
              <td> <span class="user-gmail">staff@gmail.com</span></td>    
          </tr>
        </table>        
    </ul>

    <table class="dashboard">
      <tr>
        <td>
          <ul class="nav-links">
          <li>
            <a href="staffdash.php">
              <i class='bx bx-home' ></i>
              <span class="links_name">Home</span>
            </a>
          </li>
    <div class="dropdownstudent">
    <button class="dropdown-btn"> <i class='bx bx-user' ></i>
      <span class="droplinks_name">Student</span>
      <i class="fa fa-caret-down" id="second"></i>
    </button>
    <div class="dropdown-container1">
      <a class="dropdown-a" href="#"><span class="droplinks_name">Manage Student</span></a>
    </div>

  </div>
        </ul>   
        </td>
      </tr>            
    </table>

    <table class="table-module">
      <tr>
        <td>
        <div class="dropdownadmission">
    <span class="main"><b>Admission</b></span><br>
    <span class="subs"><b>Admission history</b></span><br><br>
    <button class="dropdown-btn"> <i class='bx bx-add-to-queue' ></i>
      <span class="droplinks_name">Admission</span>
      <i class="fa fa-caret-down" id="fourth"></i>
    </button>
    <div class="dropdown-container3">
    <a class="dropdown-a" href="staffmanageadmit.php"><span class="droplinks_name">Manage Admission</span></a>
    </div>

  </div><br>
        </td>
      </tr>            
    </table>

    <table class="table-module">
      <tr>
        <td>
    <div class="dropdownmedical">
    <span class="main"><b>Medical</b></span><br>
    <span class="subs"><b>Medical Status</b></span><br><br>
    <button class="dropdown-btn"> <i class='bx bx-plus' ></i>
      <span class="droplinks_name">Medical</span>
      <i class="fa fa-caret-down" id="first"></i>
    </button>
    <div class="dropdown-container3">
    <a class="dropdown-a" href="staffhealthform.php"><span class="droplinks_name">Health Form</span></a>
    </div>

  </div><br>
        </td>
      </tr>            
    </table>

   

    <table class="table-module">
      <tr>
        <td>
    <div class="dropdowninventory">
    <span class="main"><b>Inventory</b></span><br>
    <span class="subs"><b>Inventory Monitoring</b></span><br><br>
    <button class="dropdown-btn"> <i class='bx bx-capsule' ></i>
      <span class="droplinks_name">inventory</span>
      <i class="fa fa-caret-down" id="fifth"></i>
    </button>
    <div class="dropdown-container4">
    <a class="dropdown-a" href="staffmedication.php"><span class="droplinks_name">Medication</span></a>
        <a class="dropdown-a" href="staffequipment.php"><span class="droplinks_name">Equipment</span></a>
     </div>

          </div><br>
        </td>
      </tr>            
    </table>

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
					<h1>Student</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Student</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Manage</a>
						</li>
					</ul>
				</div>
    </div> 
</div>
<!-- SIDEBAR -->

    
<div clas="container">
    <div class="frame">
    <div class="crud-container">
    <div style="display: flex; justify-content: space-between; align-items: center;">
        <button class="btn btn-primary" id="btn-first"><a href="staffstudinfo.php" class="text-light">Add Student</a></button>
        
        <!-- Search Bar -->
        <form action="" method="GET" style="margin-right: 20px;">
            <input type="text" name="search" placeholder="Search Student" class="form-control" style="display: inline-block; width: 250px;">
            <button type="submit" class="btn btn-primary" id="btn-searchbar">Search</button>
        </form>
    </div>

    <table class="table-container">
        <caption>Student Data</caption>
        <thead>
            <tr>
                <th>id</th>
                <th>Firstname</th>
                <th>Lastname</th>
                <th>Middlename</th>
                <th>Suffix</th>
                <th>Gender</th>
                <th>Address</th>
                <th>Contact number</th>
                <th>Email</th>
                <th>Student number</th>
                <th>Course</th>
                <th>Year Level</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php 
        // Establishing database connection
        include 'db.php'; // Include your database connection file

        // Check if a search query is submitted
        if (isset($_GET['search'])) {
            $search = mysqli_real_escape_string($con, $_GET['search']);
            // Search query with LIKE clause
            $sql = "SELECT * FROM `information` WHERE `firstname` LIKE '%$search%' OR `lastname` LIKE '%$search%' OR `studentnumber` LIKE '%$search%'";
        } else {
            // Default query to display all students
            $sql = "SELECT * FROM `information`";
        }
        
        $result = mysqli_query($con, $sql);
        
        if ($result) {
            while($row = mysqli_fetch_assoc($result)){
                $id = $row['id'];
                $firstname = $row['firstname'];
                $lastname = $row['lastname'];
                $middlename = $row['middlename'];
                $suffix = $row['suffix'];
                $gender = $row['gender'];
                $address = $row['address'];
                $contact = $row['contact'];
                $email = $row['email'];
                $studentnumber = $row['studentnumber'];
                $course = $row['course'];
                $year = $row['year'];
                
                echo '<tr>
                <th>'.$id.'</th>
                <td>'.$firstname.'</td>
                <td>'.$lastname.'</td>
                <td>'.$middlename.'</td>
                <td>'.$suffix.'</td>
                <td>'.$gender.'</td>
                <td>'.$address.'</td>
                <td>'.$contact.'</td>
                <td>'.$email.'</td>
                <td>'.$studentnumber.'</td>
                <td>'.$course.'</td>
                <td>'.$year.'</td>
                <td>
                    <button class="btn btn-primary" id="btn-second">
                        <a href="updatestud.php?updateid='.$id.'"><i class="fas fa-pen"></i></a>
                    </button>
                    <button class="btn btn-danger" id="btn-third">
                        <a href="deletestud.php?deleteid='.$id.'"><i class="fas fa-trash"></i></a>
                    </button>
                    <button class="btn btn-info" id="btn-fourth">
                        <a href="viewstudent.php?viewid='.$id.'" class="text-light"><i class="fas fa-eye"></i></a>
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


</body>

       
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

</html>