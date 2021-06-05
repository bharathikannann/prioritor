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
    <title>Main Page</title>
</head>

<body class="my-2">

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
            <a href="#">Pregnancy</a>
            <a href="Head Damage.php">Head Damage</a>
            <a href="Burns Specific.php">Burns</a>
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
                <h2>Pregnancy Specific Details</h2></center>
        </div>
        <div>
            <form action="/action_page.php">



                <input type="submit" value="Submit">
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
    <script src="assets/js/navbar.js"></script>
</body>

</html>
