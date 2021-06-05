<?php 
session_start(); 
include_once 'includesdata/dbhdata.inc.php';
?>

<!DOCTYPE html>
<html>

<head>
	<title>Hospital</title>
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
	<meta charset="utf-8">
	<link rel="stylesheet" href="assets/css/hospital-style.css">
	<link rel="stylesheet" href="assets/css/navbar-displaydata.css">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	
</head>

<body class="m-2 zoom">
	
	<!-- Custom Navbar -->
	<div class="navbar-custom">
		<span class="navbar-toggle-custom m-2" id="js-navbar-toggle-custom">☰</span>
		<a href="#" class="logo-custom">Prioritor</a>
		<ul class="main-nav-custom mt-2" id="js-menu-custom">
			<li class="mt-3">
				<a href="hospitalsubpages/createambulanceuser.php" class="nav-links-custom">Ambulance Management</a>
			</li>
			<li  class="mt-3 mr-4 ml-2">
				<a href="hospitalsubpages/chatbot.php" class="nav-links-custom">Chatbot Details</a>
			</li>
			<li>
				<form class="logoutbtn" action="../includes/logout.inc.php" method="post">
					<button type="submit" name="logout-submit" class="button2">Log Out</button>
				</form>
			</li>
		</ul>
	</div>

	<!-- //Testing -->
    <?php  // To test the user id is correct or not
    if(isset($_SESSION['userId'])){
	    //echo $_SESSION['userId'];
	    $userId=$_SESSION['userId'];
    }
	?>

	<center><h2 class="fontd">Hospital side</h2></center>

	<div class="row p-4">
		<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mb-4">
			<div class="card zoom hover-pointer" style="border-radius:10px;">
				<div class="card-body fontsize w-100 h=100 pl-4 mb-4">
					<h1 class="fontd fontsize"><br>The Patient Details are :</h1>
					<?php
						$sql="SELECT * FROM data WHERE idusers_afterlogin='".$userId."' ORDER BY patient_id DESC LIMIT 1;";
						$result=mysqli_query($conn,$sql);
						$resultcheck=mysqli_num_rows($result);
						if($resultcheck == 1){
							while($row=mysqli_fetch_assoc($result)){
								echo "<small>1) Patient Name : </small>"."<strong>".$row['patient_name']."</strong>"."<br>";
								if($row['patient_age']==0){
									echo "<small>2) Patient Age : </small>"."<strong>"."--"."</strong>"."<br>";
								}else{
									echo "<small>2) Patient Age : </small>"."<strong>".$row['patient_age']."</strong>"."<br>";
								}
								echo "<small>3) Patient Gender : </small>"."<strong>".$row['patient_gender']."</strong>"."<br>";
								if($row['patient_weight']==0){
									echo "<small>4) Patient Weight </small>: "."<strong>"."--"."</strong>"."<br>";
								}else{
									echo "<small>4) Patient Weight </small>: "."<strong>".$row['patient_weight']."</strong>"."<br>";
								}
								echo "<small>5) Patient Blood Group : </small>"."<strong>".$row['patient_bloodgroup']."</strong>"."<br>";
								echo "<small>6) Patient Blood Pressure </small>: "."<strong>".$row['patient_bloodpressure']."</strong>"."<br>";
								if($row['patient_SpO2level']==0){
									echo "<small>7) Patient SpO2 Level </small>: "."<strong>"."--"."</strong>"."<br>";
								}else{
									echo "<small>7) Patient SpO2 Level </small>: "."<strong>".$row['patient_SpO2level']."</strong>"."<br>";
								}
								echo "<small>8) Problems : </small>"."<strong>".$row['problems']."</strong>"."<br>";
								if($row['other_problems']!="None"){
									echo "&emsp;<small> Other Problems : </small>"."<strong>".$row['other_problems']."</strong>"."<br>";
								}
								if($row['checked']=="Checked"){
									echo "<center><strong><small>Data Checked</small></strong></center>";
								}
							}
						}
					?>
					<form action="includesdata/checkeddata.inc.php" method="POST">
						<center><button class="button1" name="checkedsubmit">Check</button></center>
					</form>
				</div>
			</div>
		</div>
		<!-- Map -->
		<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mb-4">
			<div id="map" class="z-depth-1-half map-container zoom" style="max-height: 500px">
				<iframe src="https://maps.google.com/maps?q=manhatan&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</div>
	</div>

	<!-- specific details new section -->
	<div>
	<div class="row pl-4 pr-4 pt-4">
		<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 mb-4">
			<div class="card shadowhover hover-pointer mb-4 w-100 h-100"> 
				<div class=" card-body fontsize p-4">
					<?php
						$sql="SELECT * FROM burnsspecific 
						WHERE idusers_afterlogin='".$userId."' 
						ORDER BY id DESC LIMIT 1;";

						$result=mysqli_query($conn,$sql);
						$resultcheck=mysqli_num_rows($result);
						if($resultcheck >0){
							while($row=mysqli_fetch_assoc($result)){
								$flag=0;
								echo "<center><strong>Burns</strong></center><hr>";
								if($row['degreeofburn']!="NotEntered"){
									$flag=1;
									echo "<small> Degree Of Burn : </small>"."<strong>".$row['degreeofburn']."</strong>"."<br>";
								}
								if($row['bsavalue']!=0){
									if($flag==0){
										echo "Specific Details : Burns"."<br>";
									}
									echo "<small> BSA Value : </small>"."<strong>".$row['bsavalue']."</strong>"."<br>";
								}
								if($row['degreeofburn']=="NotEntered" && $row['bsavalue']==0){
									echo "No details";					
								}
							}
						}
					?>
				</div>
			</div> 
		</div>
		<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 mb-4">
			<div class="card shadowhover hover-pointer mb-4 w-100 h-100"> 
				<div class="card-body fontsize p-4">
					<?php
						$sql="SELECT * FROM bloodlossspecific 
						WHERE idusers_afterlogin='".$userId."' 
						ORDER BY id DESC LIMIT 1;";

						$result=mysqli_query($conn,$sql);
						$resultcheck=mysqli_num_rows($result);
						if($resultcheck >0){
							while($row=mysqli_fetch_assoc($result)){
								$flag=0;
								echo "<center><strong>Blood Loss</strong></center><hr>";
								if($row['bleeding_class']!="NotEntered"){
									$flag=1;
									echo "<small> Class of Bleeding : </small>"."<strong>".$row['bleeding_class']."</strong>"."<br>";
								}
								if($row['i_e_bleeding']!="NotEntered"){
									if($flag==0){
										echo "Specific Details : Blood Loss"."<br>";
									}
									echo "<small> Type of Bleeding : </small>"."<strong>".$row['i_e_bleeding']."</strong>"."<br>";
								}
								if($row['bleeding_class']=="NotEntered" && $row['i_e_bleeding']=="NotEntered"){
									echo "No details";					
								}
							}
						}
					?>
				</div>
			</div> 
		</div>
		
		<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 mb-4">
			<div class="card shadowhover hover-pointer mb-4 w-100 h-100"> 
				<div class="card-body fontsize p-4">
					<?php
						$sql="SELECT * FROM fracturespecific 
						WHERE idusers_afterlogin='".$userId."' 
						ORDER BY id DESC LIMIT 1;";

						$result=mysqli_query($conn,$sql);
						$resultcheck=mysqli_num_rows($result);
						if($resultcheck >0){
							while($row=mysqli_fetch_assoc($result)){
								
									echo "<center><strong>Fracture</strong></center><hr>";					
								
								if($row['type_open_closed']!="NotEntered"){
									echo "<small> Closed/Open : </small>"."<strong>".$row['type_open_closed']."</strong>"."<br>";
								}
								if($row['type_complete_incomplete']!="NotEntered"){
									echo "<small> Complete/Incomplete : </small>"."<strong>".$row['type_complete_incomplete']."</strong>"."<br>";
								}
								if($row['area_of_fracture']!='NotEntered'){
									echo "<small> Area of Fracture : </small>"."<strong>".$row['area_of_fracture']."</strong>"."<br>";
								}
								if($row['type_open_closed']=="NotEntered" && $row['type_complete_incomplete']=="NotEntered" && $row['area_of_fracture']=='NotEntered'){
									echo "No details";					
								}
								}
							}
					?>
				</div>
			</div> 
		</div>

		<div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-4 mb-4">
			<div class="card shadowhover hover-pointer mb-4 w-100 h-100"> 
				<div class="card-body fontsize p-4">
					<?php
						$sql="SELECT * FROM headdamagespecific 
						WHERE idusers_afterlogin='".$userId."' 
						ORDER BY id DESC LIMIT 1;";

						$result=mysqli_query($conn,$sql);
						$resultcheck=mysqli_num_rows($result);
						if($resultcheck >0){
							while($row=mysqli_fetch_assoc($result)){
								echo "<center><strong>Head Damage</strong></center><hr>";
								if($row['open_closed']!="NotEntered"){
									echo "<small> Open/Closed : </small>"."<strong>".$row['open_closed']."</strong>"."<br>";
								}
								if($row['velocity_injury']!="NotEntered"){
									echo "<small> Velocity : </small>"."<strong>".$row['velocity_injury']."</strong>"."<br>";
								}
								if($row['mild_moderate_severe']!='NotEntered'){
									echo "<small> Severity : </small>"."<strong>".$row['mild_moderate_severe']."</strong>"."<br>";
								}
								if($row['open_closed']=="NotEntered" && $row['velocity_injury']=="NotEntered" && $row['mild_moderate_severe']=='NotEntered'){
									echo "<small>No details<small>";					
								}
							}
						}
					?>
				</div>
			</div> 
		</div>
	</div>
	</div>
	<script>
		// Note: This example requires that you consent to location sharing when
		// prompted by your browser. If you see the error "The Geolocation service
		// failed.", it means you probably did not give permission for the browser to
		// locate you.
		var map, infoWindow;
		function initMap() {
		map = new google.maps.Map(document.getElementById('map'), {
			center: {lat: 11.0168, lng: 76.9558},
			zoom: 6
		});
		infoWindow = new google.maps.InfoWindow;

		// Try HTML5 geolocation.
		if (navigator.geolocation) {
			navigator.geolocation.getCurrentPosition(function(position) {
			var pos = {
				lat: position.coords.latitude,
				lng: position.coords.longitude
			};

			infoWindow.setPosition(pos);
			infoWindow.setContent('Location found.');
			infoWindow.open(map);
			map.setCenter(pos);
			}, function() {
			handleLocationError(true, infoWindow, map.getCenter());
			});
		} else {
			// Browser doesn't support Geolocation
			handleLocationError(false, infoWindow, map.getCenter());
		}
		}

		function handleLocationError(browserHasGeolocation, infoWindow, pos) {
		infoWindow.setPosition(pos);
		infoWindow.setContent(browserHasGeolocation ?
								'Error: The Geolocation service failed.' :
								'Error: Your browser doesn\'t support geolocation.');
		infoWindow.open(map);
		}
	</script>
	<script async defer
	src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCfrASzVHSOzBlevA_eKtQ4mY9XZ7Qf6EE&callback=initMap">
	</script>
    <script src="assets/js/navbar.js"></script>
</body>
</html>