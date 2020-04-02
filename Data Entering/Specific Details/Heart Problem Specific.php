<?php 
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="stylespecific.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Crimson+Text|Work+Sans:400,700" rel="stylesheet"> <!-- crimson text regular -->

<title>Main Page</title>
</head>
<body>

<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <a href="../main page ambulance.php">Basic Details</a>
  <button class="dropdown-btn ddstyle">Specific Details 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="Blood loss Specific.php">Blood Loss</a>
    <a href="Fracture Specific.php">Fracture</a>
    <a href="#">Heart Problem</a>
    <a href="Pregnancy Specific.php">Pregnancy</a>
    <a href="Head Damage.php">Head Damage</a>
    <a href="Burns Specific.php">Burns</a>
    <a href="#">Any Others</a>
  </div>
  <a href="Mapspage.html" target="_blank">GPS Tracking</a>
  <a href="#">Any Other Details</a>
</div>

<div id="main">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Prioritor</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">Help</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
      <ul class="navbar-nav">
        <div class="justify-content-end">
          <form class="" action="../../includes/logout.inc.php" method="post">
          <button type="submit" name="logout-submit">Log Out</button>
        </form>
        </div>
      </ul>
    </div>
</nav><br>
    <div><button class="openbtn" onclick="openNav()">☰ Menu</button></div> 
    <div>
      <center><h2>Heart Problem Specific Details</h2></center>
    </div>
    <div>
      <form action="/action_page.php">
        <label for="type"><h5>Problems:</h5></label><hr>
        <input type="checkbox" name="coronaryheartdisease" value="Coronary Heart Disease">
        <label>Coronary Heart Disease</label><br>
        <input type="checkbox" name="angina" value="Angina">
        <label>Angina</label><br>
        <input type="checkbox" name="unstableangina" value="Unstable Angina">
        <label>Unstable Angina</label><br>
        <input type="checkbox" name="heartattack" value="Heart Attack">
        <label>Heart Attack</label><br>
        <input type="checkbox" name="arrhythmia" value="Arrhythmia">
        <label>Arrhythmia</label><br>
        <input type="checkbox" name="valvedisease" value="Valve Disease">
        <label>Valve Disease</label><br>
        <input type="checkbox" name="congenitalheartconditions" value="Congenital Heart Conditions">
        <label>Congenital Heart Conditions</label><br>
        <input type="checkbox" name="inheritedheartconditions" value="Inherited Heart Conditions">
        <label>Inherited Heart Conditions</label><br><hr>

        <label>Heart Attack:</label>
        <select name="HeartAttack" class="custom-select">
          <option value="Major(Compulasary Blocked)">Major(Compulasary Blocked)</option>
          <option value="Minor(Partially Blocked)">Minor(Partially Blocked)</option>
          <option value="Silent Heart Attack">Silent Heart Attack</option>
        </select>

       
       
        <input type="submit" value="Submit">
      </form>
    </div>
</div>

<script>
    function openNav() {
      document.getElementById("mySidebar").style.width = "250px";
      document.getElementById("main").style.marginLeft = "250px";
    }

    function closeNav() {
      document.getElementById("mySidebar").style.width = "0";
      document.getElementById("main").style.marginLeft= "0";
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
   
</body>
</html> 
