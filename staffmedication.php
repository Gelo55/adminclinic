<?php
include 'db.php';

if (isset($_POST['submit'])) {
    $name = trim($_POST['name']);
    $category = trim($_POST['category']);
    $description = trim($_POST['description']);
    $quantity = (int)$_POST['quantity'];  // Ensure quantity is an integer
    $date = $_POST['date'];

    // Prepare and bind
    $sql = "INSERT INTO medication (name, category, description, quantity, date) VALUES (?, ?, ?, ?, ?)";
    $stmt = $con4->prepare($sql);
    $stmt->bind_param("sssis", $name, $category, $description, $quantity, $date);

    if ($stmt->execute()) {
        header('Location: medication.php');  // Redirect first
        exit();  // Make sure script stops after redirect
    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="assets/css/medication.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel= "stylesheet" href= "https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
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
      <a class="dropdown-a" href="staffmanagestud.php"><span class="droplinks_name">Manage Student</span></a>
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
    <a class="dropdown-a" href="#"><span class="droplinks_name">Medication</span></a>
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
					<h1>Inventory</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Inventory</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Medication</a>
						</li>
					</ul>
				</div>
    </div> 
</div>

    <div class="frame">
  
    <div class="container">
  <!-- Search Bar -->
  <form method="GET" action="" class="d-flex justify-content-end mb-3">
      <input class="form-control me-2" type="search" name="search" id= "search-input" placeholder="Search Medication" aria-label="Search" value="<?php if (isset($_GET['search'])) { echo $_GET['search']; } ?>">
      <button class="btn btn-primary" type="submit" id="btn-search">Search</button>
  </form>

  <!-- Medication Table -->
  <table class="table-container">
    <caption>Medication</caption>
    <thead>
      <tr>
        <th>id</th>
        <th>Name</th>
        <th>Category</th>
        <th>Description</th>
        <th>Quantity</th>
        <th>Date</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      <?php 
        // Check if search query exists
        $search_query = "";
        if (isset($_GET['search'])) {
            $search_query = $_GET['search'];
        }

        // Modify SQL query to filter based on search input
        $sql4 = "SELECT * FROM `medication` WHERE `name` LIKE '%$search_query%' OR `category` LIKE '%$search_query%' OR `description` LIKE '%$search_query%' OR `date` LIKE '%$search_query%'";
        $result4 = mysqli_query($con4, $sql4);

        if ($result4) {
          while ($row = mysqli_fetch_assoc($result4)) {  // Assigning $row inside the loop
            $id = $row['id'];
            $name = $row['name'];
            $category = $row['category'];
            $description = $row['description'];
            $quantity = $row['quantity'];
            $date = $row['date'];

            echo '<tr>
              <th>'.$id.'</th>
              <td>'.$name.'</td>
              <td>'.$category.'</td>
              <td>'.$description.'</td>
              <td>'.$quantity.'</td>
              <td>'.$date.'</td>
              <td>
                <button class="btn btn-primary" id="btn-second"><a href="updatemedication.php?updateid='.$id.'"><i class="fas fa-pen"></i></a></button>
                <button class="btn btn-danger" id="btn-third"><a href="deletemedication.php?deleteid='.$id.'"><i class="fas fa-trash"></i></a></button>
                <button class="btn btn-info" id="btn-fourth"><a href="viewmedication.php?viewid='.$id.'" class="text-light"><i class="fas fa-eye"></i></a></button>
              </td>
            </tr>';
          }
        }
      ?>
    </tbody>
  </table>
  
  <!-- Button to trigger modal -->
  <div class="container">
    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addMedicationModal" id="btn-modal">Add Medication</button>
  </div>

  <!-- Modal Structure -->
  <div class="modal fade" id="addMedicationModal" tabindex="-1" aria-labelledby="addMedicationLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="addMedicationLabel">Add Medication</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form method="post">
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" class="form-control" placeholder="Enter Medicine name" name="name" autocomplete="off">
            </div>
            <div class="form-group">
              <label for="category">Category</label>
              <input type="text" class="form-control" placeholder="Enter Category" name="category" autocomplete="off">
            </div>
            <div class="form-group">
              <label for="description">Description</label>
              <input type="text" class="form-control" placeholder="Enter Description" name="description" autocomplete="off">
            </div>
            <div class="form-group">
              <label for="quantity">Quantity</label>
              <input type="number" class="form-control" placeholder="Quantity" name="quantity" autocomplete="off">
            </div>
            <div class="form-group">
              <label for="date">Date</label>
              <input type="date" class="form-control" placeholder="Enter Date" name="date" autocomplete="off">
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Add</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
   

    </div>


</body>


    <!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
       
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

<script type="text/javascript">
    document.getElementById('medicationForm').addEventListener('submit', function(e) {
        e.preventDefault();  // Prevent form from submitting normally
        var formData = new FormData(this);

        fetch('addMedication.php', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            console.log(data);  // You can replace this with any success message handling
            // Optionally show a success message to the user
            alert('Medication added successfully!');
            
            // Close modal after successful submission
            var modal = bootstrap.Modal.getInstance(document.getElementById('addMedicationModal'));
            modal.hide();

            // Optionally, dynamically update the medication list without reloading the page
            // You can fetch the updated list or add the new data to the DOM directly.
            // For now, we're assuming there's a table or a list element you want to update:
            // UpdateMedicationTable();

        })
        .catch(error => {
            console.error('Error:', error);
            // Optionally show an error message to the user
            alert('An error occurred while adding the medication.');
        });
    });

    // Example function to update the table with new medication (replace with your own implementation)
    function UpdateMedicationTable() {
        // Perform an AJAX request to fetch updated data, then update the HTML table or list
        fetch('getMedication.php')  // Replace with the actual script that fetches the medication list
        .then(response => response.json())
        .then(data => {
            // Assuming you have an element with ID 'medicationTableBody' where the data goes
            let tableBody = document.getElementById('medicationTableBody');
            tableBody.innerHTML = '';  // Clear existing rows
            data.forEach(medication => {
                let row = `<tr>
                             <td>${medication.name}</td>
                             <td>${medication.category}</td>
                             <td>${medication.description}</td>
                             <td>${medication.quantity}</td>
                             <td>${medication.date}</td>
                           </tr>`;
                tableBody.innerHTML += row;
            });
        })
        .catch(error => console.error('Error fetching medication list:', error));
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