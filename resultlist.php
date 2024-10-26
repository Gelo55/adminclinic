

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="assets/css/resultlist.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel= "stylesheet" href= "https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/js/fontawesome.min.js">
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
            <a href="dash.php">
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
					<h1>Medical</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Result</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">List</a>
						</li>
					</ul>
				</div>
    </div> 
</div>


    
<div clas="container">
    <div class="frame">
    <div class="stud-container">
    <header class="header">
        <h1>Medical Result</h1>
    </header>

    <!-- Search Bar -->
    <div class="search-container">
        <input type="text" id="searchInput" class="form-control" placeholder="Search...">
        <button type="submit" class="btn btn-primary search-btn">Search</button>
    </div>

    <section class="student-list">
        <table id="studentTable">
            <thead>
                <tr>
                    <th>Student Number</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Course</th>
                    <th>Year Level</th>
                    <th>Email</th>
                    <th>Record</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>21010021</td>
                    <td>Angelo</td>
                    <td>Abargos</td>
                    <td>BSIT</td>
                    <td>First Year</td>
                    <td>gelo00@gmail.com</td>
                    <td><a href="linkrecord.php" id="record">View</a></td>
                </tr>
                <tr>
                    <td>21012525</td>
                    <td>Michael</td>
                    <td>Smith</td>
                    <td>BSIT</td>
                    <td>First Year</td>
                    <td>michael.s@gmail.com</td>
                    <td><a href="" id="record">View</a></td>
                </tr>
                <tr>
                    <td>21012323</td>
                    <td>Sarah</td>
                    <td>Brown</td>
                    <td>BSIT</td>
                    <td>First Year</td>
                    <td>sarah.b@gmail.com</td>
                    <td><a href="" id="record">View</a></td>
                </tr>
                <tr>
                    <td>21013333</td>
                    <td>David</td>
                    <td>Wilson</td>
                    <td>BSIT</td>
                    <td>First Year</td>
                    <td>david.w@gmail.com</td>
                    <td><a href="" id="record">View</a></td>
                </tr>
                <tr>
                    <td>21012232</td>
                    <td>Olivia</td>
                    <td>Davis</td>
                    <td>BSIT</td>
                    <td>First Year</td>
                    <td>olivia.d@gmail.com</td>
                    <td><a href="" id="record">View</a></td>
                </tr>
            </tbody>
        </table>
    </section>

    <footer>
        <p>Generated on: October 13, 2024</p>
    </footer>
</div>

    </div>
    </div>
</body>
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

<!-- JavaScript for search functionality -->
<script>
document.getElementById('searchInput').addEventListener('keyup', function() {
    var input = document.getElementById("searchInput").value.toUpperCase();
    var table = document.getElementById("studentTable");
    var tr = table.getElementsByTagName("tr");

    for (var i = 1; i < tr.length; i++) {
        var tdStudentNum = tr[i].getElementsByTagName("td")[0]; // Student Number
        var tdFirstName = tr[i].getElementsByTagName("td")[1];  // First Name
        var tdLastName = tr[i].getElementsByTagName("td")[2];   // Last Name
        if (tdStudentNum || tdFirstName || tdLastName) {
            var textValueStudentNum = tdStudentNum.textContent || tdStudentNum.innerText;
            var textValueFirstName = tdFirstName.textContent || tdFirstName.innerText;
            var textValueLastName = tdLastName.textContent || tdLastName.innerText;
            if (textValueStudentNum.toUpperCase().indexOf(input) > -1 || 
                textValueFirstName.toUpperCase().indexOf(input) > -1 || 
                textValueLastName.toUpperCase().indexOf(input) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
});
</script>


<!-- JavaScript for search functionality -->
<script>
document.getElementById('searchInput').addEventListener('keyup', function() {
    var input = document.getElementById("searchInput").value.toUpperCase();
    var table = document.getElementById("studentTable");
    var tr = table.getElementsByTagName("tr");

    for (var i = 1; i < tr.length; i++) {
        var tdStudentNum = tr[i].getElementsByTagName("td")[0]; // Student Number
        var tdFirstName = tr[i].getElementsByTagName("td")[1];  // First Name
        var tdLastName = tr[i].getElementsByTagName("td")[2];   // Last Name
        if (tdStudentNum || tdFirstName || tdLastName) {
            var textValueStudentNum = tdStudentNum.textContent || tdStudentNum.innerText;
            var textValueFirstName = tdFirstName.textContent || tdFirstName.innerText;
            var textValueLastName = tdLastName.textContent || tdLastName.innerText;
            if (textValueStudentNum.toUpperCase().indexOf(input) > -1 || 
                textValueFirstName.toUpperCase().indexOf(input) > -1 || 
                textValueLastName.toUpperCase().indexOf(input) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";
            }
        }
    }
});
</script>

</html>
