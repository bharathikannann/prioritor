<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Crimson+Text|Work+Sans:400,700" rel="stylesheet">
    <!-- crimson text regular -->
    <link src="assets/ambulance-style.css">
    <title>Main Page</title>
</head>

<body>

    <div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
        <a href="#">Basic Details</a>
        <button class="dropdown-btn ddstyle">Specific Details
            <span>&nbsp&#x2193;</span>
        </button>
        <div class="dropdown-container">
            <a href="#">Blood Loss</a>
            <a href="#">Fracture</a>
            <a href="#">Heart Problem</a>
            <a href="#">Pregnancy</a>
            <a href="#">Head Damage</a>
            <a href="#">Burns</a>
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
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
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
                        <form class="" action="includes/logout.inc.php" method="post">
                            <button type="submit" name="logout-submit">Log Out</button>
                        </form>
                    </div>
                </ul>
            </div>
        </nav>
        <br>
        <div>
            <button class="openbtn" onclick="openNav()">☰ Menu</button>
        </div>
        <div>
            <h1 class="font1">Enter the Basic Details</h1>
        </div>
        <div>
            <form action="/action_page.php">
                <label for="fname">1)Name of the Patient :</label>
                <input type="text" id="fname" name="firstname" placeholder="Name..">
                <label for="age">2)Age :</label>
                <input type="number" id="age" name="ageofpatient" placeholder="Age..">
                <div class="slidecontainer">
                    <input type="range" min="0" max="100" value="0" class="slider" id="myRange1">
                    <p>Age: <span id="demo1"></span></p>
                </div>
                <label for="gender">3)Gender :</label>
                <select id="genderid" name="gender">
                    <option value="gender">Not Selected</option>
                    <option value="gender">Male</option>
                    <option value="gender">Female</option>
                </select>
                <label for="weight">4)Approximate Weight :</label>
                <input type="number" id="weight" name="weightofpatient" placeholder="Approximate Weight..">
                <div class="slidecontainer">
                    <input type="range" min="0" max="200" value="0" class="slider" id="myRange2">
                    <p>Weight: <span id="demo2"></span></p>
                </div>
                <label for="bloodgroup">5)Blood Group :</label>
                <select id="bloodgroupid" name="bloodgroup">
                    <option value="gender">Not Selected</option>
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                    <option value="AB+">AB+</option>
                    <option value="AB-">AB-</option>
                </select>
                <input type="submit" value="Submit">
            </form>
        </div>
    </div>
    <script src="assets/ambulance-page.js"></script>
</body>

</html>
