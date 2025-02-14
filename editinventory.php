<?php
include 'database.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $result = $conn->query("SELECT * FROM medicines WHERE id=$id");
    $medicine = $result->fetch_assoc();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $medicineName = $_POST['medicine_name'];
    $brand = $_POST['brand'];
    $dosage = $_POST['dosage'];
    $quantity = $_POST['quantity'];
    $status = $_POST['status'];
    $expiryDate = $_POST['expiry_date'];

    $conn->query("UPDATE medicines SET 
        medicine_name='$medicineName', brand='$brand', dosage='$dosage', quantity='$quantity', 
        status='$status', expiry_date='$expiryDate' WHERE id=$id");

    header("Location: inventory.php");
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <title>Clinic Management System</title>
    <link rel="stylesheet" href="assets/css/inventory.css">
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

<div class="medicine-container">
        <h2>Edit Medicine</h2>
        <form method="POST" action="">
            <input type="hidden" name="id" value="<?= $medicine['id']; ?>">
            <div class="form-group">
                <label>Medicine Name:</label>
                <input type="text" name="medicine_name" value="<?= $medicine['medicine_name']; ?>" required>
            </div>
            <div class="form-group">
                <label>Brand:</label>
                <input type="text" name="brand" value="<?= $medicine['brand']; ?>" required>
            </div>
            <div class="form-group">
                <label>Dosage:</label>
                <input type="text" name="dosage" value="<?= $medicine['dosage']; ?>" required>
            </div>
            <div class="form-group">
                <label>Quantity:</label>
                <input type="number" name="quantity" value="<?= $medicine['quantity']; ?>" required>
            </div>
            <div class="form-group">
                <label>Status:</label>
                <select name="status">
                    <option value="Available" <?= $medicine['status'] == 'Available' ? 'selected' : ''; ?>>Available</option>
                    <option value="Out of Stock" <?= $medicine['status'] == 'Out of Stock' ? 'selected' : ''; ?>>Out of Stock</option>
                </select>
            </div>
            <div class="form-group">
                <label>Expiry Date:</label>
                <input type="date" name="expiry_date" value="<?= $medicine['expiry_date']; ?>" required>
            </div>
            <button type="submit">Update Medicine</button>
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


<script>
        document.getElementById('medicine-form').addEventListener('submit', function(event) {
            event.preventDefault();
            let medicineName = document.getElementById('medicine-name').value;
            let brand = document.getElementById('brand').value;
            let dosage = document.getElementById('dosage').value;
            let quantity = document.getElementById('quantity').value;
            let status = document.getElementById('status').value;
            let expiryDate = document.getElementById('expiry-date').value;
            let editIndex = document.getElementById('edit-index').value;
            
            let table = document.getElementById('medicine-list');
            if (editIndex === "") {
                let row = table.insertRow();
                row.innerHTML = `<td>${medicineName}</td><td>${brand}</td><td>${dosage}</td><td>${quantity}</td><td>${status}</td><td>${expiryDate}</td>
                <td><button onclick="editMedicine(this)">Edit</button> <button onclick="deleteMedicine(this)">Delete</button></td>`;
            } else {
                let row = table.rows[editIndex];
                row.cells[0].innerText = medicineName;
                row.cells[1].innerText = brand;
                row.cells[2].innerText = dosage;
                row.cells[3].innerText = quantity;
                row.cells[4].innerText = status;
                row.cells[5].innerText = expiryDate;
                document.getElementById('edit-index').value = "";
            }
            document.getElementById('medicine-form').reset();
        });

        function editMedicine(button) {
            let row = button.parentElement.parentElement;
            document.getElementById('medicine-name').value = row.cells[0].innerText;
            document.getElementById('brand').value = row.cells[1].innerText;
            document.getElementById('dosage').value = row.cells[2].innerText;
            document.getElementById('quantity').value = row.cells[3].innerText;
            document.getElementById('status').value = row.cells[4].innerText;
            document.getElementById('expiry-date').value = row.cells[5].innerText;
            document.getElementById('edit-index').value = row.rowIndex - 1;
        }

        function deleteMedicine(button) {
            let row = button.parentElement.parentElement;
            row.parentElement.removeChild(row);
        }
    </script>

</body>
</html>
