<?php 
session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="stylemain.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Crimson+Text|Work+Sans:400,700" rel="stylesheet"> <!-- crimson text regular -->
  <!-- <style>
  /* The container */
  .container {
    display: block;
    position: absolute;
    padding-left: 35px;
    margin-bottom: 12px;
    cursor: pointer;
    font-size: 15px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
  }

  /* Hide the browser's default checkbox */
  .container input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
    height: 0;
    width: 0;
  }

  /* Create a custom checkbox */
  .checkmark {
    position: absolute;
    top: 0;
    left: 0;
    margin: 3px;
    height: 20px;
    width: 20px;
    background-color: #eee;
  }

  /* On mouse-over, add a grey background color */
  .container:hover input ~ .checkmark {
    background-color: #ccc;
  }

  /* When the checkbox is checked, add a blue background */
  .container input:checked ~ .checkmark {
    background-color: #2196F3;
  }

  /* Create the checkmark/indicator (hidden when not checked) */
  .checkmark:after {
    content: "";
    position: absolute;
    display: none;
  }

  /* Show the checkmark when checked */
  .container input:checked ~ .checkmark:after {
    display: block;
  }

  /* Style the checkmark/indicator */
  .container .checkmark:after {
    left: 9px;
    top: 5px;
    width: 5px;
    height: 10px;
    border: solid white;
    border-width: 0 3px 3px 0;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg);
  }
  </style> -->
    

<title>Main Ambulance Page</title>
</head>
<body>
  <div>
  <!-- <?php  // To test the user id is correct or not
      // echo $_SESSION['userId'];
  ?> -->
  </div>
<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <a href="#">Basic Details</a>
  <button class="dropdown-btn ddstyle">Specific Details 
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="Specific Details/Blood loss Specific.php">Blood Loss</a>
    <a href="Specific Details/Fracture Specific.php">Fracture</a>
    <a href="Specific Details/Heart Problem Specific.php">Heart Problem</a>
    <a href="Specific Details/Pregnancy Specific.php">Pregnancy</a>
    <a href="Specific Details/Head Damage.php">Head Damage</a>
    <a href="Specific Details/Burns Specific.php">Burns</a>
    <a href="#">Any Others</a>
  </div>
  <a href="Mapspage.html" target="_blank">GPS Tracking</a>
  <a href="#">Any Other Details</a>
</div>

<div id="main">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#"><strong>Prioritor</strong></a>
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
          <form class="" action="../includes/logout.inc.php" method="post">
          <button type="submit" name="logout-submit">Log Out</button>
        </form>
        </div>
      </ul>
    </div>
</nav><br>
    <div><button class="openbtn" onclick="openNav()">☰ Menu</button></div> 
    <div>
     <center>
       <h2>Enter the Basic Details</h2>
      </center>
    </div>
    <div>
      <form action="includesdata/signupdata.inc.php" method="POST">
        <label for="fname"><strong>1)Name of the Patient :</strong></label>
        <input type="text" id="fname" name="firstname" placeholder="Name.." class="form-control">

        <label for="age"><strong>2)Age :</strong></label>
        <input type="number" id="age" name="ageofpatient" placeholder="Age.." class="form-control">

        <div class="slidecontainer">
          (OR)<input type="range" min="0" max="100" value="0" class="slider" id="myRange1" name="ageofpatientslider">
          <p>Age: <span id="demo1"></span></p>
        </div>

        <label for="gender"><strong>3)Gender :</strong></label>
        <select id="genderid" name="gender" class="custom-select">
          <option value="Notselected">--</option>
          <option value="Male">Male</option>
          <option value="Female">Female</option>
        </select>

        <label for="weight"><strong>4)Approximate Weight :</strong></label>
        <input type="number" id="weight" name="weightofpatient" placeholder="Approximate Weight.." class="form-control">

        <div class="slidecontainer">
          (OR)<input type="range" min="0" max="200" value="0" class="slider" id="myRange2" name="weightofpatientslider">
          <p>Weight: <span id="demo2"></span></p>
        </div>

        <label for="bloodgroup"><strong>5)Blood Group :</strong></label>
        <select id="bloodgroupid" name="bloodgroup" class="custom-select">
          <option value="Notselected">--</option>
          <option value="A+">A+</option>
          <option value="A-">A-</option>
          <option value="B+">B+</option>
          <option value="B-">B-</option>
          <option value="O+">O+</option>
          <option value="O-">O-</option>
          <option value="AB+">AB+</option>
          <option value="AB-">AB-</option>
        </select>

        <label for="bloodpressure"><strong>6)Blood Pressure :</strong></label>
        <select id="bloodpressureid" name="bloodpressure" class="custom-select">
          <option value="Notselected">--</option>
          <option value="low">low</option>
          <option value="Normal">Normal</option>
          <option value="Prehypertension">Prehypertension</option>
          <option value="High Stage 1  Hypertension">High Stage 1 Hypertension</option>
          <option value="High Stage 2 Hypertension">High Stage 2 Hypertension</option>
          <option value="High Stage 3 Hypertension">High Stage 3 Hypertension</option>
        </select>

        <label for="SpO2 Level"><strong>7)SpO2 Level(%) :</strong></label>
        <input type="number" id="SpO2id" name="SpO2level" placeholder="SpO2 Level.." class="form-control">

        <div class="slidecontainer">
          (OR)<input type="range" min="0" max="100" value="0" class="slider" id="myRange3" name="SpO2levelslider">
          <p>SpO2 Level: <span id="demo3"></span></p>
        </div>
        
          <label for="Problems"><strong>8)Problems:</strong></label><br>
          <div style="margin: 15px;">
          <!-- <label class="container">One
            <input type="checkbox" checked="checked">
            <span class="checkmark"></span>
          </label><br>
          <label class="container">One
            <input type="checkbox" checked="checked">
            <span class="checkmark"></span>
          </label><br> -->
          <input type="checkbox" id="problembl" name="problem[]" value="Blood Loss">
          <label for="Blood Loss"> Blood Loss </label><br>
          <input type="checkbox" id="problemfr" name="problem[]" value="Fracture">
          <label for="Fracture"> Fracture </label><br>
          <input type="checkbox" id="problemHeart" name="problem[]" value="Heart Problem">
          <label for="Heart Problem"> Heart Problem</label><br>
          <input type="checkbox" id="problemPreg" name="problem[]" value="Pregnancy">
          <label for="Pregnancy"> Pregnancy</label><br>
          <input type="checkbox" id="problemhe" name="problem[]" value="Head Injury">
          <label for="Head Injury"> Head Injury</label><br>
          <input type="checkbox" id="problembr" name="problem[]" value="Burns">
          <label for="Burns"> Burns</label><br>
          <label><strong>Any Others</strong></label>
          <input type="text" name="anyotherproblems" placeholder="Any other Problems...." class="form-control">

        </div>
        <input type="submit" value="Submit" name="submit">
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

    var slider1 = document.getElementById("myRange1");
    var output1 = document.getElementById("demo1");
    output1.innerHTML = slider1.value;

    slider1.oninput = function() {
      output1.innerHTML = this.value;
    }

    var slider2 = document.getElementById("myRange2");
    var output2 = document.getElementById("demo2");
    output2.innerHTML = slider2.value;

    slider2.oninput = function() {
      output2.innerHTML = this.value;
    }

    var slider3 = document.getElementById("myRange3");
    var output3 = document.getElementById("demo3");
    output3.innerHTML = slider2.value;

    slider3.oninput = function() {
      output3.innerHTML = this.value;
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
