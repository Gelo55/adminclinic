<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <title>Clinic Management System</title>
    <link rel="stylesheet" href="assets/css/dash.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
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
</li>
        <img src="assets/images/changli.jpg" alt="avatar" class="admin-profile">
        <table class="user-profile">
          <tr>
            <td><span class="user-name"><b>admin name</b></span></td>
          </tr>
          <tr>
              <td> <span class="user-gmail">adminid@gmail.com</span></td>    
          </tr>
        </table>        
    </ul>

    <table class="dashboard">
      <tr>
        <td>
          <ul class="nav-links">
          <li>
            <a href="#">
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
      <a class="dropdown-a" href="managestud.php"><span class="droplinks_name">Manage Student</span></a>
    </div>

  </div>

  <div class="dropdownstaff">
    <button class="dropdown-btn"> <i class='bx bx-user' ></i>
      <span class="droplinks_name">Clinic Staff</span>
      <i class="fa fa-caret-down" id="third"></i>
    </button>
    <div class="dropdown-container2">
      <a class="dropdown-a" href="managestaff.php"><span class="droplinks_name">Manage Staff</span></a>

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
    <a class="dropdown-a" href="admithistory.php"><span class="droplinks_name">Admission History</span></a>
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
    <a class="dropdown-a" href="healthform.php"><span class="droplinks_name">Health Form</span></a>
    <a class="dropdown-a" href="medresult.php"><span class="droplinks_name">Medical Result</span></a>
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
    <a class="dropdown-a" href="medication.php"><span class="droplinks_name">Medication</span></a>
    <a class="dropdown-a" href="equipment.php"><span class="droplinks_name">Equipment</span></a>
     </div>

          </div><br>
        </td>
      </tr>            
    </table>

    <table class="table-module">
      <tr>
        <td>
        <div class="dropdownreport">
    <span class="main"><b>Report</b></span><br>
    <span class="subs"><b>Report Update</b></span><br><br>
    <button class="dropdown-btn"> <i class='bx bx-edit' ></i>
      <span class="droplinks_name">Report and Analytics</span>
      <i class="fa fa-caret-down" id="sixth"></i>
    </button>
    <div class="dropdown-container5">
    <a class="dropdown-a" href="reportadmission.php"><span class="droplinks_name">Admission Report</span></a>
    <a class="dropdown-a" href="reportinventory.php"><span class="droplinks_name">Inventory Report</span></a>
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
					<h1>Dashboard</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Admin</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Home</a>
						</li>
					</ul>
				</div>
    </div> 
</div>

<!-- main -->
<!-- SIDEBAR -->
<!--#################################################################################-->

    <div class="container">
        
<!-- frame -->
<div class= "frame">
    <div class= "box-info" id="info1">
      <a href="profile.php"><header class= "header"></header>
      <h1>Profile</h1>
      <span><i class= "bx bx-user"></i></span></a>
    </div>
  

    <div class= "box-info" id="info2">
      <a href="healthform.php"><header class= "header"></header>
      <h1>Medical</h1>
      <span><i class= "bx bx-plus-medical"></i></span></a>
    </div>
  
    
    
    <div class= "box-info" id="info3">
      <a href="Medication.php"><header class= "header"></header>
      <h1>Inventory</h1>
      <span><i class= "bx bx-calendar"></i></span></a>
    </div>
  
    
    <div class= "box-info" id="info4">
      <a href="admithistory.php"><header class= "header"></header>
      <h1>Admit</h1>
      <span><i class= "bx bx-message-square-add"></i></span></a>
    </div>

    
    <div class="table-container">
      <table class="clinic-table">
      <header class="schedule-header"><h1>Medical Schedule</h1></header>
          <thead class= "sched-table">
              <tr>
                  <th class= "sched-table">Department</th>
                  <th class="sched-table">Time</th>
                  <th class= "sched-table">Schedule</th>
                  <th class= "sched-table">Status</th>
              
              </tr>
          </thead>
          <tbody class= "table-body">
              <tr>
                  <td>CRIM</td>
                  <td>8:00 AM - 5:00 PM</td>
                  <td>Monday</td>
                  <td><span class="status finished">Finished</span></td>
              </tr>
              <tr>
                  <td>EDUC</td>
                  <td>8:00 AM - 5:00 PM</td>
                  <td>Tuesday</td>
                  <td><span class="status ongoing">ongoing</span></td>
              </tr>
              <tr>
                  <td>BSBA/BSOA/BSAIS/ENTREP</td>
                  <td>8:00 AM - 5:00 PM</td>
                  <td>Wednesday</td>
                  <td><span class="status pending">pending</span></td>
              </tr>
              <tr>
                  <td>BSIT/BLIS/BSCPE/BSP</td>
                  <td>8:00 AM - 5:00 PM</td>
                  <td>Thursday</td>
                  <td><span class="status pending">pending</span></td>
              </tr>
              <tr>
                  <td>BSHM/BSTM</td>
                  <td>8:00 AM - 5:00 PM</td>
                  <td>Friday</td>
                  <td><span class="status pending">pending</span></td>
              </tr>
          </tbody>
      </table>
     </div>

     <div class="appointment-container">
      <header class="announce-header"><h2>Announcement</h2></header>
       <ul class="appointment-list">
           <li>
               <div class="time">Today</div>
               <div class="details">
                   <h3>Medical is ongoing</h3>
                   <p>medical is ongoing for educ department</p>
               </div>
           </li>
           <li>
               <div class="time">8 AM - <br>5 PM</div>
               <div class="details"> 
                   <h3>Medical Hours</h3>
                   <p>Medical will be availlable at 8 am to 5 pm</p>
               </div>
           </li>
           <li>
               <div class="time">Today</div>
               <div class="details">
                   <h3>Inventory Stock</h3>
                   <p>Stock of medicine was needed</p>
               </div>
           </li>
           <li>
               <div class="time">Sat and <br> Sun</div>
               <div class="details">
                   <h3>Medical will not available</h3>
                   <p>Medical will not available at weekends</p>
               </div>
           </li>
       </ul>
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
</body>
</html>
