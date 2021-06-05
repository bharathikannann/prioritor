<?php 
session_start();
 ?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/navbar.css">
    <link rel="stylesheet" type="text/css" href="assets/css/stylespecific.css">
    <style>
        body {
            line-height: 30px;
        }
        
        .break {
            display: block;
            /* makes it have a width */
            content: "";
            /* clears default height */
            margin-top: -10px;
            /* change this to whatever height you want it */
        }

    </style>

    <title>Main Page</title>
</head>

<body class="my-2">
    <?php  // To test the user id is correct or not
    if(isset($_SESSION['userId'])){
      //echo $_SESSION['userId'];
      $userId=$_SESSION['userId'];
      //echo $userId;
    }
  ?>
        <div id="mySidebar" class="sidebar">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
            <a href="../main page ambulance.php">Basic Details</a>
            <button class="dropdown-btn ddstyle">Specific Details
                <span>&nbsp&#x2193;</span>
            </button>
            <div class="dropdown-container">
                <a href="Blood loss Specific.php">Blood Loss</a>
                <a href="Fracture Specific.php">Fracture</a>
                <a href="Heart Problem Specific.php">Heart Problem</a>
                <a href="Pregnancy Specific.php">Pregnancy</a>
                <a href="Head Damage.php">Head Damage</a>
                <a href="#">Burns</a>
                <a href="#">Any Others</a>
            </div>
            <a href="Mapspage.html" target="_blank">GPS Tracking</a>
            <a href="#">Any Other Details</a>
        </div>

        <div id="main">
            <div class="navbar-custom mb-4">
                <span class="navbar-toggle-custom m-2 p-2" id="js-navbar-toggle-custom">
            ☰
        </span>
                <a href="#" class="logo-custom">Prioritor</a>
                <ul class="main-nav-custom mt-2" id="js-menu-custom">
                    <li class="mt-1">
                        <a href="#" class="nav-links-custom">Home</a>
                    </li>
                    <li class="mt-1">
                        <a href="#" class="nav-links-custom">Contact Us</a>
                    </li>
                    <li>
                        <form class="ml-4" action="../../includes/logout.inc.php" method="post">
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
                    <h2><strong>Burns Specific Details</strong></h2></center>
            </div>
            <div>
                <form action="includesspecificdata/signupburnsspecific.inc.php" method="post">
                    <label><strong>Degree of Burn :</strong> </label>
                    <select name="degreeofburn" class="custom-select" id="DegreeId">
                        <option value="Not Selected">--</option>
                        <option value="First Degree">First Degree</option>
                        <option value="Second Degree">Second Degree</option>
                        <option value="Third Degree">Third Degree</option>
                    </select>
                    <hr>
                    <label>Body Surface Area Affected by Burn :</label>
                    <br>
                    <label><strong>1)Left Arm :(BSA-9%): </strong></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <br class="break">&nbsp;&nbsp;&nbsp;&nbsp; Amount Burned :
                    <input type="radio" name="leftarm" value=9>&nbsp;100%&nbsp;
                    <input type="radio" name="leftarm" value=6.75>&nbsp;75%&nbsp;
                    <input type="radio" name="leftarm" value=4.5>&nbsp;50%&nbsp;
                    <input type="radio" name="leftarm" value=2.25>&nbsp;25% &nbsp;
                    <input type="radio" name="leftarm" value=0 checked="checked">&nbsp;0% &nbsp;
                    <br>

                    <label><strong>2)Right Arm(BSA-9%):</strong> </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <br class="break">&nbsp;&nbsp;&nbsp;&nbsp;Amount Burned :
                    <input type="radio" name="rightarm" value=9>&nbsp;100%&nbsp;
                    <input type="radio" name="rightarm" value=6.75>&nbsp;75%&nbsp;:
                    <input type="radio" name="rightarm" value=4.5>&nbsp;50%&nbsp;
                    <input type="radio" name="rightarm" value=2.25>&nbsp;25% &nbsp;
                    <input type="radio" name="rightarm" value=0 checked="checked">&nbsp;0%
                    <br>

                    <label><strong>3) Head(BSA-9%):</strong> </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <br class="break">&nbsp;&nbsp;&nbsp;&nbsp;Amount Burned :
                    <input type="radio" name="head" value=9>&nbsp;100%&nbsp;
                    <input type="radio" name="head" value=6.75>&nbsp;75%&nbsp;
                    <input type="radio" name="head" value=4.5>&nbsp;50%&nbsp;
                    <input type="radio" name="head" value=2.25>&nbsp;25% &nbsp;
                    <input type="radio" name="head" value=0 checked="checked">&nbsp;0%
                    <br>

                    <label><strong>4) Chest(BSA-9%):</strong> </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <br class="break">&nbsp;&nbsp;&nbsp;&nbsp; Amount Burned :
                    <input type="radio" name="chest" value=9>&nbsp;100%&nbsp;
                    <input type="radio" name="chest" value=6.75>&nbsp;75%&nbsp;
                    <input type="radio" name="chest" value=4.5> &nbsp;50%&nbsp;
                    <input type="radio" name="chest" value=2.25>&nbsp;25% &nbsp;
                    <input type="radio" name="chest" value=0 checked="checked">&nbsp;0%
                    <br>

                    <label><strong>5) Abdomen(BSA-9%):</strong> </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <br class="break">&nbsp;&nbsp;&nbsp;&nbsp;Amount Burned :
                    <input type="radio" name="abdomen" value=9>&nbsp;100%&nbsp;
                    <input type="radio" name="abdomen" value=6.75>&nbsp;75%&nbsp;
                    <input type="radio" name="abdomen" value=4.5>&nbsp;50%&nbsp;
                    <input type="radio" name="abdomen" value=2.25>&nbsp;25% &nbsp;
                    <input type="radio" name="abdomen" value=0 checked="checked">&nbsp;0%
                    <br>


                    <label><strong>6) Back(BSA-18%):</strong> </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <br class="break">&nbsp;&nbsp;&nbsp;&nbsp;Amount Burned :
                    <input type="radio" name="back" value=18>&nbsp;100%&nbsp;
                    <input type="radio" name="back" value=13.5>&nbsp;75%&nbsp;
                    <input type="radio" name="back" value=9>&nbsp;50%&nbsp;
                    <input type="radio" name="back" value=4.5>&nbsp;25% &nbsp;
                    <input type="radio" name="back" value=0 checked="checked">&nbsp;0%
                    <br>


                    <label><strong>7)Left Leg(BSA-18%):</strong> </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <br class="break">&nbsp;&nbsp;&nbsp;&nbsp;Amount Burned :
                    <input type="radio" name="leftleg" value=18>&nbsp;100%&nbsp;
                    <input type="radio" name="leftleg" value=13.5>&nbsp;75%&nbsp;
                    <input type="radio" name="leftleg" value=9>&nbsp;50%&nbsp;
                    <input type="radio" name="leftleg" value=4.5>&nbsp;25% &nbsp;
                    <input type="radio" name="leftleg" value=0 checked="checked">&nbsp;0%
                    <br>


                    <label><strong>8)Right Leg(BSA-18%):</strong> </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <br class="break">&nbsp;&nbsp;&nbsp;&nbsp;Amount Burned :
                    <input type="radio" name="rightleg" value=18>&nbsp;100%&nbsp;
                    <input type="radio" name="rightleg" value=13.5>&nbsp;75%&nbsp;
                    <input type="radio" name="rightleg" value=9>&nbsp;50%&nbsp;
                    <input type="radio" name="rightleg" value=4.5>&nbsp;25%&nbsp;&nbsp;
                    <input type="radio" name="rightleg" value=0 checked="checked">&nbsp;0%
                    <br>

                    <label><strong>9)Groin :(BSA-1%):</strong> </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <br class="break">&nbsp;&nbsp;&nbsp;&nbsp;Amount Burned :
                    <input type="radio" name="groin" value=1>&nbsp;100%&nbsp;
                    <input type="radio" name="groin" value=0.75>&nbsp;75%&nbsp;
                    <input type="radio" name="groin" value=0.5>&nbsp;50%&nbsp;
                    <input type="radio" name="groin" value=0.25>&nbsp;25% &nbsp;
                    <input type="radio" name="groin" value=0 checked="checked">&nbsp;0%
                    <br>
                    <hr>


                    <input type="submit" value="Submit" name="burnssubmit">
                </form>
            </div>
        </div>

        <script>
            function openNav() {
                document.getElementById("mySidebar")
                    .style.width = "250px";
                document.getElementById("main")
                    .style.marginLeft = "250px";
            }

            function closeNav() {
                document.getElementById("mySidebar")
                    .style.width = "0";
                document.getElementById("main")
                    .style.marginLeft = "0";
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
        <script src="../assets/js/navbar.js"></script>
</body>

</html>
