<div id="sidenav" class="sidenav">
    <ul class="nav-link">
    <li class="bell">
    <a href="#" id="bell-icon" class="active">
        <i class='fas fa-envelope'></i>
    </a>
    <!-- Notification Box -->
    <div id="notification-box" class="notification-box">
        <p><i class="fas fa-bell"></i>No new notifications</p>
        <p class="second-paragraph">When you have notifications,</p> <br> <p class="third-paragraph">they will appear here.</p>
    </div>
</li>
<li class="settings">
    <a href="#" id="settings-icon">
        <i class='fas fa-caret-down'></i>
    </a>
    <!-- Unique Dropdown Menu -->
    <ul id="settings-dropdown-menu" class="settings-dropdown-menu">
        <li><a href="profile.php">Profile</a></li>
        <li><a href="#">About</a></li>
        <li><a href="index.php">Logout</a></li>
    </ul>
</li>
        <img src="assets/images/bcp.png" alt="avatar" class="admin-profile">
        <table class="user-profile">
          <tr>
            <td><span class="user-name"><b>########</b></span></td>
          </tr>
        </table>        
    </ul>

    <table class="dashboard">
      <tr>
        <td>
          <ul class="nav-links">
          <li>
            <a href="dash.php">
              <i class='fas fa-home' ></i>
              <span class="links_name">Home</span>
            </a>
          </li><br>
    <div class="dropdownstudent">
    <button class="dropdown-btn"> <i class='fas fa-user' ></i>
      <span class="droplinks_name">Student</span>
      <i class="fa fa-caret-down" id="second"></i>
    </button>
    <div class="dropdown-container1">
      <a class="dropdown-a" href="studoption.php"><span class="droplinks_name">Student Data</span></a>
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
    <button class="dropdown-btn"> <i class='fas fa-notes-medical' ></i>
      <span class="droplinks_name">Admit</span>
      <i class="fa fa-caret-down" id="fourth"></i>
    </button>
    <div class="dropdown-container3">
    <a class="dropdown-a" href="admitpatient.php"><span class="droplinks_name">Admiit Data</span></a>
    </div>

  </div><br>
        </td>
      </tr>            
    </table>

    <table class="table-module">
      <tr>
        <td>
    <div class="dropdownmedical">
    <button class="dropdown-btn"> <i class='fas fa-briefcase-medical' ></i>
      <span class="droplinks_name">Medical</span>
      <i class="fa fa-caret-down" id="first"></i>
    </button>
    <div class="dropdown-container3">
    <a class="dropdown-a" href="medoption.php"><span class="droplinks_name">Medical</span></a>
    <a class="dropdown-a" href="diseaselist.php"><span class="droplinks_name">Disease List</span></a>
    </div>

  </div><br>
        </td>
      </tr>            
    </table>

   

    <table class="table-module">
      <tr>
        <td>
    <div class="dropdowninventory">
    <button class="dropdown-btn"> <i class='fas fa-tablets' ></i>
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
    <button class="dropdown-btn"> <i class='fas fa-comment-medical' ></i>
      <span class="droplinks_name">Report and Reminder</span>
      <i class="fa fa-caret-down" id="sixth"></i>
    </button>
    <div class="dropdown-container5">
    <a class="dropdown-a" href="reportnew.php"><span class="droplinks_name">Report</span></a>

      </div><br>
        </td>
      </tr>            
    </table>
</div>