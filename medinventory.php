<?php
include 'database.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $description = $_POST['description'];
    $brand = $_POST['brand'];
    $dosage = $_POST['dosage'];
    $applicable = $_POST['applicable'];
    $quantity = $_POST['quantity'];
    $status = $_POST['status'];
    $date = $_POST['date'];

    $sql = "INSERT INTO medicine (name, description, brand, dosage, applicable, quantity, status, date) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssssssss", $name, $description, $brand, $dosage, $applicable, $quantity, $status, $date);
    
    if ($stmt->execute()) {
        header('location:medinventory.php');
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
    <link rel="stylesheet" href="assets/css/manageinv.css">
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
        <form method="post">
      <div class="form-group">
      <label for="name">Medicine Name</label>
        <input class="form-control" list="name" name="name" placeholder="Select Medicine" required autocomplete="off">
        <datalist id="name">
            <option value="Paracetamol"></option>
            <option value="ibuprofen"></option>
            <option value="Mefenamic"></option>
            <option value="Antihistamines"></option>
            <option value="Antacids"></option>
            <option value="Cough"></option>
            <option value="Anti-Diamheal"></option>
        </datalist>
      </div>

          <div class="form-group1">
            <label for="name">Description</label>
            <input type="text" class="form-control" placeholder="Enter Description" name="description" autocomplete="off">
          </div>
       
      <div class="form-group2">
      <label for="name">Brand</label>
        <input class="form-control" list="brand" name="brand" placeholder="Select Brand" required autocomplete="off">
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

      <div class="form-group3">
      <label for="name">Dosage</label>
        <input class="form-control" list="dosage" name="dosage" placeholder="Select Dosage" required autocomplete="off">
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
 
      <div class="form-group4">
      <label for="name">Applicable</label>
        <input class="form-control" list="applicable" name="applicable" placeholder="Applicable for:" required autocomplete="off">
        <datalist id="applicable">
            <option value="Adult"></option>
            <option value="Senior Citizen"></option>
        </datalist>
      </div>

          <div class="form-group5">
            <label for="number">Quantity</label>
            <input type="number" class="form-control" placeholder="Enter Quantity" name="quantity" autocomplete="off">
          </div>

       
      <div class="form-group6">
      <label for="name">Status</label>
        <input class="form-control" list="status" name="status" placeholder="Select Stock Status" required autocomplete="off">
        <datalist id="status">
            <option value="Have Stock"></option>
            <option value="Out of Stock"></option>
        </datalist>
      </div>

          <div class="form-group7">
            <label for="date">Expiry Date</label>
            <input type="date" class="form-control" placeholder="Enter Expiry Date" name="date" autocomplete="off">
          </div>

            <button type="submit" class="btn btn-primary" name="submit" id="btnsubmit">ADD</button>

        </form>
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
                <th>Medicine Name</th>
                <th>Description</th>
                <th>Brand</th>
                <th>Dosage</th>
                <th>Applicable</th>
                <th>Quantity</th>
                <th>Status</th>
                <th>Expiry Date</th>
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
            $sql = "SELECT * FROM `medicine` WHERE `name` LIKE '%$search%' OR `description` LIKE '%$search%' OR `brand` LIKE '%$search%'";
        } else {
            // Default query to display all students
            $sql = "SELECT * FROM `medicine`";
        }
        
        $result = mysqli_query($conn, $sql);
        
        if ($result) {
            while($row = mysqli_fetch_assoc($result)){
                $id = $row['id'];
                $name = $row['name'];
                $description = $row['description'];
                $brand = $row['brand'];
                $dosage = $row['dosage'];
                $applicable = $row['applicable'];
                $quantity = $row['quantity'];
                $status = $row['status'];
                $date = $row['date'];
               
                echo '<tr>
                <th>'.$id.'</th>
                <td>'.$name.'</td>
                <td>'.$description.'</td>
                <td>'.$brand.'</td>
                <td>'.$dosage.'</td>
                <td>'.$applicable.'</td>
                <td>'.$quantity.'</td>
                <td>'.$status.'</td>
                <td>'.$date.'</td>
                <td>
                    <button class="btn btn-primary" id="btn-second">
                        <a href="updateinventory.php?updateid='.$id.'"><i class="fas fa-pen"></i></a>
                    </button>
                    <button class="btn btn-danger" id="btn-third">
                        <a href="deleteinventory.php?deleteid='.$id.'"><i class="fas fa-trash"></i></a>
                    </button>
                    <button class="btn btn-info" id="btn-fourth">
                        <a href="viewinventory.php?viewid='.$id.'" class="text-light"><i class="fas fa-eye"></i></a>
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
