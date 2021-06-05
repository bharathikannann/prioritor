<?php 
session_start(); 
include_once '../includesdata/dbhdata.inc.php';
?>

<!DOCTYPE html>
<html>

<head>
	<title>Hospital</title>
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
	<meta charset="utf-8">
	<link rel="stylesheet" href="../assets/css/hospital-style.css">
	<link rel="stylesheet" href="../assets/css/navbar-displaydata.css">
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/createambulanceuserstyle.css">
	<style>
		.log-form .input {
  display: block;
  margin: auto auto;
  width: 100%;
  margin-top: 0.1em;
  margin-bottom: 0.1em;
  padding: 0.1em 0;
  border: none;
  border-bottom: 1px solid #eaeaea;
  color: #757575;
}
.log-form .input:focus {
  outline: none;
}
	</style>
	
</head>

<body class="m-2 zoom">
	
	<!-- Custom Navbar -->
	<div class="navbar-custom">
		<span class="navbar-toggle-custom m-2" id="js-navbar-toggle-custom">☰</span>
		<a href="#" class="logo-custom">Prioritor</a>
		<ul class="main-nav-custom mt-2" id="js-menu-custom">
			<li class="mt-3">
				<a href="../Display data.php" class="nav-links-custom">Home</a>
			</li>
			<li  class="mt-3 mr-4 ml-2">
				<a href="chatbot.php" class="nav-links-custom">Chatbot Details</a>
			</li>
			<li>
				<form class="logoutbtn" action="../../includes/logout.inc.php" method="post">
					<button type="submit" name="logout-submit" class="button2">Log Out</button>
				</form>
			</li>
		</ul>
	</div>

	<!-- //Testing -->
    <?php  // To test the user id is correct or not
    if(isset($_SESSION['userId'])){
	    // echo $_SESSION['userId'];
        // echo $_SESSION['userUid'];
	    $userId=$_SESSION['userId'];
        $userUid=$_SESSION['userUid'];
    }
	?>

	<center><h2 class="fontd">Create Ambulance user</h2></center>
    <div>
        
    </div>
    <div class="log-form m-5 pb-5">
		<div class="log-form zoom p-4">
		<center><h3>Ambulance 1</h3></center>
		<?php
			$sql="SELECT * FROM users WHERE idusers='".$userId."';";
			$result=mysqli_query($conn,$sql);
			$resultcheck=mysqli_num_rows($result);
			if($resultcheck == 1){
				while($row=mysqli_fetch_assoc($result)){
					echo "<big>Ambulance 1 username : "."<strong>".$row['ambulanceUsername']."</strong></big>"."<br>";
				}
			}
		?>
		<br>
		<?php 
			if (isset($_GET["error"])) {
				if ($_GET["error"]=="emptyfields") {
					echo '<center><h3 class="redcolor">Fill in all the fields</h3></center>';
				}else if($_GET["error"]=="passwordcheck") {
					echo '<center><h3 class="redcolor">Your Password do not match</h3></center>';
				}
			}
		?>
		<?php
			$sql="SELECT * FROM users WHERE idusers='".$userId."';";
			$result=mysqli_query($conn,$sql);
			$resultcheck=mysqli_num_rows($result);
			if($resultcheck == 1){
				while($row=mysqli_fetch_assoc($result)){
					if($row['ambulancePassword']=="NotEntered"){
						echo "<label>Create password for the first ambulance</label>";
					}else{
						echo "<label>Update password for the first ambulance</label><label style='opacity:60%;' class='ml-4'>* Passwords are hashed so previous passwords are not shown here.</label>";
					}
				}
			}
		?>
        <form action="includesmanyusers/createusers.inc.php" method="post" autocomplete="off">
        <strong><label class="" for="ambulancepsw">Password</label></strong><br>
        <input type="password" title="ambulanceusername" placeholder="ambulance password" class="input" name="ambulancepwd"/><br>
        <strong><label class="" for="ambulancepsw">Repeat Password</label></strong><br>
        <input type="password" title="username" placeholder="repeat ambulance password" class="input" id="ambulancepsinput" name="ambulancepwd-repeat"/>
        <input type="checkbox" onclick="showpasswordfunction()" class="mt-2 mb-4"><label class="ml-2 mt-2 mb-4">Show Password</label><br>
        
        
		
		<?php
			$sql="SELECT * FROM users WHERE idusers='".$userId."';";
			$result=mysqli_query($conn,$sql);
			$resultcheck=mysqli_num_rows($result);
			if($resultcheck == 1){
				while($row=mysqli_fetch_assoc($result)){
					if($row['ambulancePassword']=="NotEntered"){
						echo "<button type='submit' class='btn' name='ambulance-createuser-submit'>Create ambulance</button>";
					}else{
						echo "<button type='submit' class='btn' name='ambulance-createuser-submit'>Update password</button>";
					}
				}
			}
		?>
    </form>
		</div>
    </div>
    <script type="text/javascript">
        function showpasswordfunction() {
            var x = document.getElementById("ambulancepsinput");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password"
            }
        }

    </script>
    <script src="../assets/js/navbar.js"></script>
</body>
</html>