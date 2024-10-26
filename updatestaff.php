<?php
include 'db.php';

$id = $_GET['updateid'];
$id = intval($id); // Ensure $id is an integer to prevent SQL injection

// Correct SQL query to select data for pre-population
$sql2 = "SELECT * FROM `staff` WHERE id = ?";
$stmt = $con2->prepare($sql2);
$stmt->bind_param("i", $id);
$stmt->execute();
$result2 = $stmt->get_result();

// Check if the query was successful and data was fetched
if ($result2 && $result2->num_rows > 0) {
    $row = $result2->fetch_assoc();

    // Pre-populate form fields with fetched data
    $firstname = $row['firstname'];
    $lastname = $row['lastname'];
    $birthday = $row['birthday'];
    $gender = $row['gender'];
    $contact = $row['contact'];
    $username = $row['username'];
    $password = $row['password'];
    $role = $row['role'];
} else {
    die("No data found for this ID.");
}

if (isset($_POST['submit'])) {
    // Fetch new values from the form submission
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $birthday = $_POST['birthday'];
    $gender = $_POST['gender'];
    $contact = $_POST['contact'];
    $username = $_POST['usernme'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    // Prepare an SQL statement to update the data
    $sql2 = "UPDATE `staff` SET firstname = ?, lastname = ?, birthday = ?, gender = ?, contact = ?, username = ?, password = ?, role = ? WHERE id = ?";
    $stmt = $con2->prepare($sql2);

    if ($stmt === false) {
        die("Error preparing statement: " . $con2->error);
    }

    // Bind parameters to the prepared statement
    $stmt->bind_param(
        "ssssssssi", // 8 strings and 1 integer (id)
        $firstname, $lastname, $birthday, $gender, $contact, $username, $password, $role, $id
    );

    // Execute the statement and check for errors
    if ($stmt->execute()) {
        // Redirect to manage page after successful update
        header('Location: managestaff.php');
        exit();
    } else {
        die("Error executing statement: " . $stmt->error);
    }

    // Close the statement
}

// Close the connection
$con2->close();
?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="assets/css/staffupdate.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel= "stylesheet" href= "https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/js/fontawesome.min.js">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Clinic Management System</title>
</head>
<body>

     <!-- main -->
     <div class="container">
    <div class="head-title">
				<div class="left">
					<h1>Update</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">update</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">staff</a>
						</li>
					</ul>
				</div>
    </div> 
</div>
<!-- main -->
    
     
</>
<!-- main -->

<div class="frame">

    <div class="box-info">
      <h1>Update Staff Information</h1>
      <div class="container my-5">
        <form method="post">
          <div class="form-group" id="fname">
            <label for="firstname">Firstname</label>
            <input type="text" class="form-control" placeholder="Enter your firstname" name="firstname" autocomplete="off" value=<?php echo $firstname;?>>
          </div>
          <div class="form-group1" id="lname">
            <label for="lastname">lastname</label>
            <input type="text" class="form-control" placeholder="Enter your lastname" name="lastname" autocomplete="off" value=<?php echo $lastname;?>>
          </div>
          <div class="form-group2" id="birthday">
            <label for="birthday">Birthday</label>
            <input type="date" class="form-control" placeholder="Enter your birthday" name="birthday" autocomplete="off" value=<?php echo $birthday;?>>
          </div>
          <div class="form-group3" id="gender">
             <input class="form-control" list="gender" name="gender" placeholder="Gender" required autocomplete="off" value=<?php echo $gender;?>>
             <datalist id="gender">
             <option value="Female"></option>
             <option value="Male"></option>
             </datalist>
             </div>
             <div class="form-group4" id="contact">
            <label for="contact">Contact Number</label>
            <input type="number" class="form-control" placeholder="Enter your contat number" name="contact" autocomplete="off" value=<?php echo $contact;?>>
          </div>
          <div class="form-group5" id="email">
            <label for="username">username</label>
            <input type="username" class="form-control" placeholder="Enter your email" name="username" autocomplete="off" value=<?php echo $username;?>>
          </div>
          <div class="form-group6" id="pass">
            <label for="password">Password</label>
            <input type="password" class="form-control" placeholder="Enter your Password" name="password" autocomplete="off" value=<?php echo $password;?>>
          </div>

          <div class="form-group7" id="role">
            <label for="name">role</label>
            <input type="text" class="form-control" placeholder="Enter your role" name="role" autocomplete="off" value=<?php echo $role;?>>
          </div>

            <button type="submit" class="btn btn-primary" name="submit">update</button>

        </form>
      </div>
    </div>

    <div class="box-bg">
    <img src="assets/images/bcp.png" alt="" id="side-logo">
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
          let hrs = document.getElementById("hrs");
          let min = document.getElementById("min");

          setInterval(() => {
            let currentTime = new Date();

          hrs.innerHTML = (currentTime.getHours() <10?"0":"") + currentTime.getHours();
          min.innerHTML = (currentTime.getMinutes() <10?"0":"") + currentTime.getMinutes();
          }, 1000);

          function updateclock() {
            pe = "PM";
          }

          if(hrs > 12){
            hrs = hrs - 12;
            pe = "AM";
          }
          
        </script>
</body>
</html>