<?php 

include 'database.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <title>Clinic Management System</title>
    <link rel="stylesheet" href="assets/css/firstdatastem.css">
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
					<h1>1st Year - STEM</h1>
					
				</div>
    </div> 
</div>

<!-- main -->
<!-- SIDEBAR -->
<!--#################################################################################-->

    <div class="container">
        
<!-- frame -->
<div class= "frame">
        <div class="table-data">
        <table class="table-stem" border="2">
        <thead>
            <tr class="table-header">
                <th>ID</th>
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
                <th>Contact Number</th>
                <th>Parent Contact Number</th>
                <th>Disability Status</th>
                <th>Illness</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

            <?php

            $sql="SELECT * FROM students";
            $result=mysqli_query($con, $sql);
            if($result){
                while( $row=mysqli_fetch_assoc($result)){
                    $id = $row['id'];
                    $firstname = $row['firstname'];
                    $lastname = $row['lastname'];
                    $middlename = $row['middlename'];
                    $student_number = $row['student_number'];
                    $course = $row['course'];
                    $year_level = $row['year_level'];
                    $section = $row['section'];
                    $age = $row['age'];
                    $gender = $row['gender'];
                    $address = $row['address'];
                    $contact_number = $row['contact_number'];
                    $parent_contact = $row['parent_contact'];
                    $disability_status = $row['disability_status'];
                    $illness = $row['illness'];
                    echo '<tr>
                    <th scope="row">'.$id.'</th>
                    <td>'.$firstname.'</td>
                    <td>'.$lastname.'</td>
                    <td>'.$middlename.'</td>
                    <td>'.$student_number.'</td>
                    <td>'.$course.'</td>
                    <td>'.$year_level.'</td>
                    <td>'.$section.'</td>
                    <td>'.$age.'</td>
                    <td>'.$gender.'</td>
                    <td>'.$address.'</td>
                    <td>'.$contact_number.'</td>
                    <td>'.$parent_contact.'</td>
                     <td>'.$disability_status.'</td>
                    <td>'.$illness.'</td>
                    <td>    
                    <button class="btn-edit"><a href="stemupdate.php?updateid='.$id.'"><i class="bx bx-edit" id="edit"></i></a></button>
                    <button class="btn-delete"><a href="stemdelete.php?deleteid='.$id.'"><i class="bx bx-trash" id="delete"></i></a></button> 
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

</body>
</html>
