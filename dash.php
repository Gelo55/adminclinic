<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Clinic Management System</title>
    <link rel="stylesheet" href="assets/css/dashadmin.css">
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
					<h1>Dashboard</h1>
				</div>
    </div> 
</div>

<!-- main -->
<!-- SIDEBAR -->
<!--#################################################################################-->

    <div class="container">
        
<!-- frame -->
<div class= "frame">

<div class="card">
  <div class="card-header">
    <h1>Total SHS Medical</h1>
  </div>
  <span><i class="fas fa-briefcase-medical"></i></span>
  <div id="card-body">
  </div>
</div>


<div class="card2">
  <div class="card-header2">
    <h1>Total Admit</h1>
  </div>
  <span><i class="fas fa-notes-medical"></i></span>
  <div class="card-body2">
    <h2 id="total-admit">0</h2> <!-- Display total admits -->
  </div>
</div>


<div class="card3">
  <div class="card-header3">
    <h1>Total College Medical</h1>
  </div>
  <span><i class="fas fa-briefcase-medical"></i></span>
  <div class="card-body3">
  </div>
</div>


<div class="card4">
  <div class="card-header4">
    <h1>Total disease</h1>
  </div>
  <span><i class="fas fa-notes-medical"></i></span>
  <div class="card-body4">
  </div>
</div>

  
<div class="table-container">
        <table class="clinic-table">
            <header class="schedule-header"><h1>Medical Schedule</h1></header>
            <thead class="sched-table">
                <tr>
                    <th class="sched-table">Year level</th>
                    <th class="sched-table">Time</th>
                    <th class="sched-table">Schedule</th>
                    <th class="sched-table">Status</th>
                </tr>
            </thead>
            <tbody class="table-body">
                <tr>
                    <td>SHS</td>
                    <td>8:00 AM - 5:00 PM</td>
                    <td>Monday</td>
                    <td><span class="status">pending</span></td>
                </tr>
                <tr>
                    <td>First Year</td>
                    <td>8:00 AM - 5:00 PM</td>
                    <td>Tuesday</td>
                    <td><span class="status">pending</span></td>
                </tr>
                <tr>
                    <td>Second Year</td>
                    <td>8:00 AM - 5:00 PM</td>
                    <td>Wednesday</td>
                    <td><span class="status">pending</span></td>
                </tr>
                <tr>
                    <td>Third Year</td>
                    <td>8:00 AM - 5:00 PM</td>
                    <td>Thursday</td>
                    <td><span class="status">pending</span></td>
                </tr>
                <tr>
                    <td>Fourth Year</td>
                    <td>8:00 AM - 5:00 PM</td>
                    <td>Friday</td>
                    <td><span class="status">pending</span></td>
                </tr>
            </tbody>
        </table>
    </div>


        
  <div class="analytics-container">

          <!-- Chart container -->
    <div id="chart"></div>


    
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
  let number = document.getElementById('number');
  let counter = 0;
  setInterval(()=>{
    if(counter == 75){
      clearInterval();
    }else{
      counter += 1;
      number.innerHTML = counter + "%";
    }
  }, 25)
</script>


<script>
    // Options for the line chart
    var options = {
        chart: {
            type: 'line',
            height: 380
        },
        series: [{
            name: 'Medical',
            data: [0, 100, 200, 300, 400]
        }],
        xaxis: {
            categories: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri']
        },
        title: {
            text: 'Medical finished per day',
            align: 'left'
        },
        stroke: {
            straight: 'smooth'
        },
        markers: {
            size: 6,
        }
    }

    // Rendering the chart
    var chart = new ApexCharts(document.querySelector("#chart"), options);
    chart.render();
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
        const dayOrder = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
        const today = new Date();
        const currentDay = dayOrder[today.getDay()];

        document.querySelectorAll(".clinic-table tbody tr").forEach(row => {
            const scheduleDay = row.cells[2].innerText;
            const statusCell = row.querySelector(".status");

            if (dayOrder.indexOf(scheduleDay) < dayOrder.indexOf(currentDay)) {
                statusCell.innerText = "Finished";
                statusCell.className = "status finished";
            } else if (scheduleDay === currentDay) {
                statusCell.innerText = "ongoing";
                statusCell.className = "status ongoing";
            } else {
                statusCell.innerText = "pending";
                statusCell.className = "status pending";
            }
        });
    </script>

<script>
    function updateTotalAdmit() {
        fetch('get_total_admits.php')
            .then(response => response.json())
            .then(data => {
                document.getElementById("total-admit").innerText = data.total;
            })
            .catch(error => console.error('Error fetching total admits:', error));
    }

    // Fetch the count on page load and refresh every 10 seconds
    document.addEventListener("DOMContentLoaded", () => {
        updateTotalAdmit();
        setInterval(updateTotalAdmit, 10000);
    });
</script>

</body>
</html>
