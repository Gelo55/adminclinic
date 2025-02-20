<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Clinic Management System</title>
    <link rel="stylesheet" href="assets/css/reportinv.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
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
					<h1>Inventory Report</h1>
					
				</div>
    </div> 
</div>

<!-- main -->
<!-- SIDEBAR -->
<!--#################################################################################-->

    <div class="container">
        
<!-- frame -->
<div class= "frame">


<div class="container" id="inventoryReport">
    <h2>Inventory Report Form</h2>

    <div class="section-title">Inventory Information</div>
    <div class="form-group">
        <label for="id">Inventory ID:</label>
        <input type="text" id="id">
    </div>
    <div class="form-group">
        <label for="admitted">Number of Admitted Patients:</label>
        <input type="text" id="admitted">
    </div>

    <div class="section-title">Medicine Details</div>
    <div class="form-group">
        <label for="medicineName">Medicine Name:</label>
        <input type="text" id="medicineName">
    </div>
    <div class="form-group">
        <label for="brand">Brand:</label>
        <input type="text" id="brand">
    </div>
    <div class="form-group">
        <label for="dosage">Dosage:</label>
        <input type="text" id="dosage">
    </div>
    <div class="form-group">
        <label for="quantity">Quantity:</label>
        <input type="number" id="quantity">
    </div>
    <div class="form-group">
        <label for="status">Status:</label>
        <select id="status">
            <option value="Available">Available</option>
            <option value="Out of Stock">Out of Stock</option>
            <option value="Expired">Expired</option>
        </select>
    </div>
    <div class="form-group">
        <label for="expiry">Expiry Date:</label>
        <input type="date" id="expiry">
    </div>
    <div class="form-group">
        <label for="issue">Issue Present:</label>
        <select id="issue">
            <option value="No">No</option>
            <option value="Yes">Yes</option>
        </select>
    </div>

    <div class="section-title">Health Insights</div>
    <div class="form-group">
        <label for="disease">Most Common Disease Treated:</label>
        <input type="text" id="disease">
    </div>
    <div class="form-group">
        <label for="mostUsed">Most Used Medicine:</label>
        <input type="text" id="mostUsed">
    </div>

    <div class="section-title">Additional Information</div>
    <div class="form-group">
        <label for="notes">Additional Notes:</label>
        <textarea id="notes" placeholder="Enter any additional notes here..."></textarea>
    </div>
    <div class="form-group">
        <label for="comments">Comments:</label>
        <textarea id="comments" placeholder="Enter any comments here..."></textarea>
    </div>

    <div class="section-title">Received By</div>
    <div class="received-section">
        <div class="received-box">
            <p><strong>Received By:</strong></p>
            <p>Name: ______________________</p>
            <p>Signature: __________________</p>
        </div>
        <div class="received-box">
            <p><strong>Authorized By:</strong></p>
            <p>Name: ______________________</p>
            <p>Signature: __________________</p>
        </div>
    </div>
</div>

<!-- Button to Download PDF -->
<button class="btn-download" onclick="downloadPDF()">Download as PDF</button>

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
  function downloadPDF() {
    const element = document.getElementById('inventoryReport');

    // Set proper PDF options
    const options = {
        margin: 5,
        filename: 'Inventory_Report.pdf',
        image: { type: 'jpeg', quality: 1 }, // High quality
        html2canvas: { 
            scale: 2,  // Higher scale for better quality
            scrollY: 0 // Fixes blank page issue
        },
        jsPDF: { unit: 'mm', format: 'a4', orientation: 'portrait' }
    };

    // Convert HTML to PDF
    html2pdf().from(element).set(options).save();
}

</script>
</body>
</html>
