<?php
include 'db.php';

$id = $_GET['updateid'];
$id = intval($id); // Ensure $id is an integer to prevent SQL injection

// Correct SQL query - no single quotes around the table name
$sql4 = "SELECT * FROM `medication` WHERE id = $id";
$result4 = mysqli_query($con4, $sql4);

// Check if the query was successful and data was fetched
if ($result4 && mysqli_num_rows($result4) > 0) {
    $row = mysqli_fetch_assoc($result4);

    // Pre-populate form fields with fetched data
    $name = $row['name'];
    $category = $row['category'];
    $description = $row['description'];
    $quantity = $row['quantity'];
    $date = $row['date'];
} else {
    die("No data found for this ID.");
}

if (isset($_POST['submit'])) {
    // Fetch new values from the form submission
    $name = $_POST['name'];
    $category = $_POST['category'];
    $description = $_POST['description'];
    $quantity = intval($_POST['quantity']); // Ensure it's an integer
    $date = $_POST['date'];

    // Prepare an SQL statement to update the data
    $sql4 = "UPDATE `medication` SET name = ?, category = ?, description = ?, quantity = ?, date = ? WHERE id = ?";
    $stmt = $con4->prepare($sql4);

    if ($stmt === false) {
        die("Error preparing statement: " . $con4->error);
    }

    // Bind parameters to the prepared statement
    $stmt->bind_param(
        "sssisi", // 3 strings, 1 integer (quantity), 1 string (date), and 1 integer (id)
        $name, $category, $description, $quantity, $date, $id
    );

    // Execute the statement and check for errors
    if ($stmt->execute()) {
        // Redirect to manage page after successful update
        header('location:medication.php');
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
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="assets/css/updatemedication.css">
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
							<a class="active" href="#">medication</a>
						</li>
					</ul>
				</div>
    </div> 
</div>
    
     
</>
<!-- main -->

<div class="frame">

    <div class="box-info">
      <h1>Update Medication</h1>
      <div class="container my-5">
        <form method="post">
          <div class="form-group">
            <label for="name">Firstname</label>
            <input type="text" class="form-control" placeholder="Enter your Firstname" name="name" autocomplete="off" value=<?php echo $name;?>>
          </div>
          <div class="form-group1">
            <label for="name">Lastname</label>
            <input type="text" class="form-control" placeholder="Enter your Lastname" name="category" autocomplete="off" value=<?php echo $category;?>>
          </div>
          <div class="form-group2">
            <label for="name">Department</label>
            <input type="text" class="form-control" placeholder="Enter your Department" name="description" autocomplete="off" value=<?php echo $description;?>>
          </div>

          <div class="form-group3">
            <label for="name">category</label>
            <input type="text" class="form-control" placeholder="what category you are?" name="quantity" autocomplete="off" value=<?php echo $quantity;?>>
          </div>

            
          <div class="form-group4">
            <label for="date">Date</label>
            <input type="date" class="form-control" placeholder="Enter date" name="date" autocomplete="off" value=<?php echo $date;?>>
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