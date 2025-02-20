<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Clinic Management System</title>
    <link rel="stylesheet" href="assets/css/reportemergency.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
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
					<h1>Emergency Report</h1>
					
				</div>
    </div> 
</div>

<!-- main -->
<!-- SIDEBAR -->
<!--#################################################################################-->

    <div class="container">
        
<!-- frame -->
<div class= "frame">

    
<div class="container" id="incidentForm">
        <h2>Emergency Report Form</h2>
        <p>Clinic should use this form to report emergency incidents around the school</p>

        <!-- Employee Information -->
        <table id="reporttable">
            <tr>
                <th colspan="2" id="incidentth">Person Information</th>
            </tr>
            <tr>
                <td id="incidenttd">Name: <input type="text"></td>
                <td id="incidenttd">ID: <input type="text"></td>
            </tr>
            <tr>
                <td id="incidenttd">Type: <input type="text"></td>
                <td id="incidenttd">Department: <input type="text"></td>
            </tr>
            <tr>
                <td id="incidenttd">Section if needed: <input type="text"></td>
                <td id="incidenttd">Date: <input type="date"></td>
            </tr>
        </table>

        <!-- Incident Details -->
        <table id="reporttable">
            <tr>
                <th colspan="3" id="incidentth">Emergency Details</th>
            </tr>
            <tr>
                <td id="incidenttd">Date: <input type="date"></td>
                <td id="incidenttd">Time: <input type="time"></td>
                <td id="incidenttd">Location: <input type="text"></td>
            </tr>
            <tr>
                <td colspan="3" id="incidenttd">Witnesses (if applicable): <input type="text"></td>
            </tr>
            <tr>
                <td colspan="3" id="incidenttd">Description of Incident:<br><textarea rows="4"></textarea></td>
            </tr>
            <tr>
                <td colspan="3" id="incidenttd">Immediate Actions Taken:<br><textarea rows="3"></textarea></td>
            </tr>
            <tr>
                <td colspan="3" id="incidenttd">Root Cause of Incident:<br><textarea rows="3"></textarea></td>
            </tr>
        </table>

        <!-- Follow-Up Actions -->
        <table id="reporttable">
            <tr>
                <th id="incidentth">Follow-Up Actions</th>
            </tr>
            <tr>
                <td id="incidenttd"><textarea rows="3"></textarea></td>
            </tr>
        </table>

        <!-- Signatures -->
        <table id="reporttable">
            <tr>
                <td id="incidenttd">Person Signature: <input type="text"></td>
                <td id="incidenttd">Doctor Signature: <input type="text"></td>
            </tr>
        </table>

        <!-- Received By -->
        <table id="reporttable">
            <tr>
                <th colspan="2" id="incidentth">Received By</th>
            </tr>
            <tr>
                <td id="incidenttd">Name: <input type="text"></td>
                <td id="incidenttd">Date: <input type="date"></td>
            </tr>
            <tr>
                <td colspan="2" id="incidenttd">Signature: <input type="text"></td>
            </tr>
        </table>

        <!-- Download PDF Button -->
        <button class="btn" onclick="downloadPDF()">Download PDF</button>
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
        function downloadPDF() {
            const { jsPDF } = window.jspdf;
            let doc = new jsPDF("p", "mm", "a4"); // A4 size document

            // Capture the container as an image
            html2canvas(document.getElementById("incidentForm"), { scale: 2 }).then(canvas => {
                let imgData = canvas.toDataURL("image/png");
                let imgWidth = 190; // Fit image in PDF width
                let imgHeight = (canvas.height * imgWidth) / canvas.width;

                // Add image to PDF
                doc.addImage(imgData, "PNG", 10, 10, imgWidth, imgHeight);
                doc.save("Incident_Report.pdf"); // Save the file
            });
        }
    </script>

</body>
</html>
