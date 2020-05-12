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
  <style>
  @media only screen and (max-width: 600px) {
    /*.fontsize{
      font-size: 18px;
    }*/
}
body{
line-height: 30px;   
  }
  .break {
            display: block; /* makes it have a width */
            content: ""; /* clears default height */
            margin-top: -10px; /* change this to whatever height you want it */
}
}

</style>

<title>Main Page</title>
</head>
<body>
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
    <i class="fa fa-caret-down"></i>
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
      <center><h2><strong>Burns Specific Details</strong></h2></center>
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
       <label>Body Surface Area Affected by Burn :</label><br>
       <label><strong>1)Left Arm :(BSA-9%): </strong></label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br class="break">&nbsp;&nbsp;&nbsp;&nbsp;
          Amount Burned : <input type="radio" name="leftarm" value=9>&nbsp;100%&nbsp;
          <input type="radio" name="leftarm" value=6.75>&nbsp;75%&nbsp;
          <input type="radio" name="leftarm" value=4.5>&nbsp;50%&nbsp;
          <input type="radio" name="leftarm" value=2.25>&nbsp;25% &nbsp;
          <input type="radio" name="leftarm" value=0 checked="checked">&nbsp;0% &nbsp;<br>

        <label><strong>2)Right Arm(BSA-9%):</strong> </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <br class="break">&nbsp;&nbsp;&nbsp;&nbsp;Amount Burned : <input type="radio" name="rightarm" value=9>&nbsp;100%&nbsp;
           <input type="radio" name="rightarm" value=6.75>&nbsp;75%&nbsp;:
           <input type="radio" name="rightarm" value=4.5>&nbsp;50%&nbsp;
           <input type="radio" name="rightarm" value=2.25>&nbsp;25% &nbsp;
           <input type="radio" name="rightarm" value=0 checked="checked">&nbsp;0%<br>

        <label><strong>3) Head(BSA-9%):</strong> </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <br class="break">&nbsp;&nbsp;&nbsp;&nbsp;Amount Burned : <input type="radio" name="head" value=9>&nbsp;100%&nbsp;
           <input type="radio" name="head" value=6.75>&nbsp;75%&nbsp;
           <input type="radio" name="head" value=4.5>&nbsp;50%&nbsp;
           <input type="radio" name="head" value=2.25>&nbsp;25% &nbsp;
           <input type="radio" name="head" value=0 checked="checked">&nbsp;0%<br>

          <label><strong>4) Chest(BSA-9%):</strong> </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
             <br class="break">&nbsp;&nbsp;&nbsp;&nbsp; Amount Burned : <input type="radio" name="chest" value=9>&nbsp;100%&nbsp;
             <input type="radio" name="chest" value=6.75>&nbsp;75%&nbsp;
             <input type="radio" name="chest" value=4.5> &nbsp;50%&nbsp;
             <input type="radio" name="chest" value=2.25>&nbsp;25% &nbsp;
             <input type="radio" name="chest" value=0 checked="checked">&nbsp;0%<br>

        <label><strong>5) Abdomen(BSA-9%):</strong> </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <br class="break">&nbsp;&nbsp;&nbsp;&nbsp;Amount Burned : <input type="radio" name="abdomen" value=9>&nbsp;100%&nbsp;
           <input type="radio" name="abdomen" value=6.75>&nbsp;75%&nbsp;
           <input type="radio" name="abdomen" value=4.5>&nbsp;50%&nbsp;
           <input type="radio" name="abdomen" value=2.25>&nbsp;25% &nbsp;
           <input type="radio" name="abdomen" value=0 checked="checked">&nbsp;0%<br>
       

       <label><strong>6) Back(BSA-18%):</strong> </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <br class="break">&nbsp;&nbsp;&nbsp;&nbsp;Amount Burned : <input type="radio" name="back" value=18>&nbsp;100%&nbsp;
          <input type="radio" name="back" value=13.5>&nbsp;75%&nbsp;
          <input type="radio" name="back" value=9>&nbsp;50%&nbsp;
          <input type="radio" name="back" value=4.5>&nbsp;25% &nbsp;
          <input type="radio" name="back" value=0 checked="checked">&nbsp;0%<br>
       

       <label><strong>7)Left Leg(BSA-18%):</strong> </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <br class="break">&nbsp;&nbsp;&nbsp;&nbsp;Amount Burned : <input type="radio" name="leftleg" value=18>&nbsp;100%&nbsp;
          <input type="radio" name="leftleg" value=13.5>&nbsp;75%&nbsp;
          <input type="radio" name="leftleg" value=9>&nbsp;50%&nbsp;
          <input type="radio" name="leftleg" value=4.5>&nbsp;25% &nbsp;
           <input type="radio" name="leftleg" value=0 checked="checked">&nbsp;0%<br>
       

       <label><strong>8)Right Leg(BSA-18%):</strong> </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <br class="break">&nbsp;&nbsp;&nbsp;&nbsp;Amount Burned : <input type="radio" name="rightleg" value=18>&nbsp;100%&nbsp;
          <input type="radio" name="rightleg" value=13.5>&nbsp;75%&nbsp;
          <input type="radio" name="rightleg" value=9>&nbsp;50%&nbsp;
          <input type="radio" name="rightleg" value=4.5>&nbsp;25%&nbsp;&nbsp;
          <input type="radio" name="rightleg" value=0 checked="checked">&nbsp;0% <br>

       <label><strong>9)Groin :(BSA-1%):</strong> </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <br class="break">&nbsp;&nbsp;&nbsp;&nbsp;Amount Burned : <input type="radio" name="groin" value=1>&nbsp;100%&nbsp;
          <input type="radio" name="groin" value=0.75>&nbsp;75%&nbsp;
          <input type="radio" name="groin" value=0.5>&nbsp;50%&nbsp;
          <input type="radio" name="groin" value=0.25>&nbsp;25% &nbsp;
          <input type="radio" name="groin" value=0 checked="checked">&nbsp;0%<br><hr>

       
        <input type="submit" value="Submit" name="burnssubmit">
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
