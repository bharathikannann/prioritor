<?php 
session_start();
 ?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="assets/css/ambulance-style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/navbar.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <title>Main Ambulance Page</title>
    <style>
        body {
            background-color: #ffebcd;
        }
        .width{
            width:100%;
            border:grey;
        }
    </style>
</head>

<body class="my-2">
    <div>
        <!-- Testing -->
        <!-- <?php  // To test the user id is correct or not
          // echo $_SESSION['userId'];
      ?> -->
    </div>
    <div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
        <a href="#">Basic Details</a>
        <button class="dropdown-btn ddstyle">Specific Details
            <span>&nbsp&#x2193;</span>
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
        <!-- Custom Navbar -->
        <div class="navbar-custom mb-4">
            <span class="navbar-toggle-custom m-2 p-2" id="js-navbar-toggle-custom">☰</span>
            <a href="#" class="logo-custom">Prioritor</a>
            <ul class="main-nav-custom mt-2" id="js-menu-custom">
                <li class="mt-1">
                    <a href="#" class="nav-links-custom">Home</a>
                </li>
                <li class="mt-1">
                    <a href="#" class="nav-links-custom">Contact Us</a>
                </li>
                <li>
                    <form class="ml-4" action="../includes/logout.inc.php" method="post">
                        <button type="submit" name="logout-submit" class="btn cursor">Log Out</button>
                    </form>
                </li>
            </ul>
        </div>
        <div>
            <button class="p-2 mb-2" onclick="openNav()">☰ Menu</button>
        </div>
        <div>
            <center>
                <h2>Enter the Basic Details</h2>
            </center>
        </div>
        <div class="mx-4">
            <form action="includesdata/signupdata.inc.php" method="POST">
                <label for="fname"><strong>1)Name of the Patient :</strong></label>
                <input type="text" id="fname" name="firstname" placeholder="Name.." class="form-control">

                <label for="age" class="mt-2"><strong>2)Age :</strong></label>
                <input type="number" id="age" name="ageofpatient" placeholder="Age.." class="form-control">

                <div class="slidecontainer">
                    (OR)
                    <input type="range" min="0" max="100" value="0" class="slider" id="myRange1" name="ageofpatientslider">
                    <p>Age: <span id="demo1"></span></p>
                </div>

                <label for="gender" class="mt-2"><strong>3)Gender :</strong></label>
                <select id="genderid" name="gender" class="custom-select">
                    <option value="Notselected">--</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>

                <label for="weight" class="mt-2"><strong>4)Approximate Weight :</strong></label>
                <input type="number" id="weight" name="weightofpatient" placeholder="Approximate Weight.." class="form-control">

                <div class="slidecontainer">
                    (OR)
                    <input type="range" min="0" max="200" value="0" class="slider" id="myRange2" name="weightofpatientslider">
                    <p>Weight: <span id="demo2"></span></p>
                </div>

                <label for="bloodgroup" class="mt-2"><strong>5)Blood Group :</strong></label>
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

                <label for="bloodpressure" class="mt-2"><strong>6)Blood Pressure :</strong></label>
                <select id="bloodpressureid" name="bloodpressure" class="custom-select">
                    <option value="Notselected">--</option>
                    <option value="low">low</option>
                    <option value="Normal">Normal</option>
                    <option value="Prehypertension">Prehypertension</option>
                    <option value="High Stage 1  Hypertension">High Stage 1 Hypertension</option>
                    <option value="High Stage 2 Hypertension">High Stage 2 Hypertension</option>
                    <option value="High Stage 3 Hypertension">High Stage 3 Hypertension</option>
                </select>

                <label for="SpO2 Level" class="mt-2"><strong>7)SpO2 Level(%) :</strong></label>
                <input type="number" id="SpO2id" name="SpO2level" placeholder="SpO2 Level.." class="form-control">

                <div class="slidecontainer">
                    (OR)
                    <input type="range" min="0" max="100" value="0" class="slider" id="myRange3" name="SpO2levelslider">
                    <p>SpO2 Level: <span id="demo3"></span></p>
                </div>

                <label for="Problems" class="mt-2"><strong>8)Problems:</strong></label>
                <br>
                <div style="margin: 15px;">
                    <input type="checkbox" id="problembl" name="problem[]" value="Blood Loss">
                    <label for="Blood Loss"> Blood Loss </label>
                    <br>
                    <input type="checkbox" id="problemfr" name="problem[]" value="Fracture">
                    <label for="Fracture"> Fracture </label>
                    <br>
                    <input type="checkbox" id="problemHeart" name="problem[]" value="Heart Problem">
                    <label for="Heart Problem"> Heart Problem</label>
                    <br>
                    <input type="checkbox" id="problemPreg" name="problem[]" value="Pregnancy">
                    <label for="Pregnancy"> Pregnancy</label>
                    <br>
                    <input type="checkbox" id="problemhe" name="problem[]" value="Head Injury">
                    <label for="Head Injury"> Head Injury</label>
                    <br>
                    <input type="checkbox" id="problembr" name="problem[]" value="Burns">
                    <label for="Burns"> Burns</label>
                    <br>
                    <label><strong>Any Others</strong></label>
                    <input type="text" name="anyotherproblems" placeholder="Any other Problems...." class="form-control">

                    <!-- <label for="bloodpressure" class="mt-2"><strong>Choose Hospital</strong></label>
                <select id="bloodpressureid" name="bloodpressure" class="custom-select">
                    <option value="Notselected">Own Hospital</option>
                    <option value="low">Hospital A</option>
                    <option value="Normal">Hospital B</option>
                    <option value="Prehypertension">Hospital C</option>
                </select><br>
                <button type="button" class="btn width mt-2">Find Hospital near me</button> -->

                </div>
                <input type="submit" value="Submit" name="submit">
            </form>
        </div>
    </div>
    <script src=assets/js/ambulance-mainpage.js></script>
    <script src="assets/js/navbar.js"></script>
    <script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
    <df-messenger
        intent="WELCOME"
        chat-title="Prioritor"
        agent-id="7a1a0efb-f012-414b-bf5f-0e0aec255971"
        language-code="en"
        chat-icon="assets/images/chatbotlogo.png"
    ></df-messenger>
</body>

</html>

