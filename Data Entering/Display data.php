<?php 
session_start();
 ?>
<?php 
include_once 'includesdata/dbhdata.inc.php';
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Hospital</title>
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
	<meta charset="utf-8">
	<style type="text/css">
		

		html, body {
		  height: absolute;
		  margin: 10px;
		  background-color: 	rgb(255, 230, 230);
		}

		div.marginlayout {
		  border-style: solid;
		  border-color: rgb(255, 150, 150);;
		  box-sizing: 10px;
		}

		div.marginlayout2 {
		  border-style: solid;
		  border-color: white;
		  box-sizing: 10px;
		  padding:20px;
		  height:400px;
		  width:90%;
		}

		div.marginlayout3 {
		  border-style: solid;
		  border-color: rgb(255, 150, 150);
		  box-sizing: 10px;
		  padding:20px;
		  height:90%;
		}
		.container{
			padding: 50px;
		}
		.marginlayout{
			border-color: black;
		}
		.paddinglogout{
			padding: 0px 0px 0px 1300px;
		}

		.fontsize{
			font-size: 30px;
		}
		#map {
		  height: 100%;
		  width: 100%;
		}

		div.relative {
		  position: relative;
		  width: 96%;
		  height: 400px;
		  border: 1px solid #ff0000;
		} 

		div.absolute1 {
		  position: absolute;
		  top: 0px;
		  width: 50%;
		  height: 100%;
		}
		div.absolute2 {
		  position: absolute;
		  top: 1px;
		  right: 0;
		  width: 45%;
		  height: 98%;
		  border: 3px solid #73AD21;
		}
		.fontd{
			font-size: 30px;
		}
		
		.button1:hover {
		  background-color: white;
		  color: #4CAF50;
		  border: 2px solid #4CAF50;
		}
		.button1{
			font-size: 20px;
			border-radius: 4px;
			background-color: #4CAF50;
			color:white;
			padding: 10px 20px;
			margin: 8px 0;
			cursor: pointer;
			border: none;
			width: 100%;
			-webkit-transition-duration: 0.4s; /* Safari */
		  transition-duration: 0.4s;
		}
		.button2:hover {
		  background-color: #4CAF50;
		  color:white;
		}
		.button2{
			font-size: 10px;
			border-radius: 4px;
			background-color: white;
			color: #4CAF50;
			padding: 8px;
			cursor: pointer;
			border: none;
			width: 100%;
			-webkit-transition-duration: 0.4s; /* Safari */
		  transition-duration: 0.4s;
		}

	</style>
</head>
<body>
    <?php  // To test the user id is correct or not
    if(isset($_SESSION['userId'])){
	    //echo $_SESSION['userId'];
	    $userId=$_SESSION['userId'];
    }
	?>
	<div class="marginlayout3">

		  <div class="paddinglogout">
		    <form class="" action="../includes/logout.inc.php" method="post">
		    <button type="submit" class="button2"name="logout-submit">Log Out</button>
		  </form>
		  </div>
	
	<div>
		<div class="font1"><h1 style="background-color:rgb(255, 225, 225);text-align:center; border: 1px solid #73AD21; padding: 10px;
"><b>Welcome to Prioritor</b></h1>

</div>
		<div><h2><b></b></h2></div>
	    
	</div>
	<h1 class="fontd">The Patient Details are : &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp; Location</h1>
	<div>
		<div>
	<div class="fontsize marginlayout2 relative"style="background-color:rgb(255, 215, 215);">
		<div class="absolute1">
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
<hr><div>
	<form action="includesdata/checkeddata.inc.php" method="POST">
		<center><button class="button1" name="checkedsubmit">Check</button></center>
	</form>
</div>	
</div>
	<div class="absolute2">
		<div id="map"></div>
	</div>
</div>
<div class="fontsize" style="margin: 15px; padding-left: 50px;background-color:rgb(255, 200, 200);">
	<?php
		$sql="SELECT * FROM burnsspecific 
		WHERE idusers_afterlogin='".$userId."' 
		ORDER BY id DESC LIMIT 1;";

		$result=mysqli_query($conn,$sql);
		$resultcheck=mysqli_num_rows($result);
		if($resultcheck >0){
			while($row=mysqli_fetch_assoc($result)){
				$flag=0;
				if($row['degreeofburn']!="NotEntered"){
					echo "<center><small>Specific Details </small>: <strong>Burns</strong></center>";
					$flag=1;
					echo "<small> Degree Of Burn : </small>"."<strong>".$row['degreeofburn']."</strong>"."<br>";
				}
				if($row['bsavalue']!=0){
					if($flag==0){
						echo "Specific Details : Burns"."<br>";
					}
					echo "<small> BSA Value : </small>"."<strong>".$row['bsavalue']."</strong>"."<br>";
				}
				if($row['degreeofburn']!="NotEntered" || $row['bsavalue']!=0){
					echo "<hr>";					
				}
			}
		}
	?>
</div> 
<div class="fontsize" style="margin: 15px;padding-left: 50px;background-color:rgb(255, 200,200);">
	<?php
		$sql="SELECT * FROM bloodlossspecific 
		WHERE idusers_afterlogin='".$userId."' 
		ORDER BY id DESC LIMIT 1;";

		$result=mysqli_query($conn,$sql);
		$resultcheck=mysqli_num_rows($result);
		if($resultcheck >0){
			while($row=mysqli_fetch_assoc($result)){
				$flag=0;
				if($row['bleeding_class']!="NotEntered"){
					echo "<center><small>Specific Details </small>: <strong>Blood Loss</strong></center>";
					$flag=1;
					echo "<small> Class of Bleeding : </small>"."<strong>".$row['bleeding_class']."</strong>"."<br>";
				}
				if($row['i_e_bleeding']!="NotEntered"){
					if($flag==0){
						echo "Specific Details : Blood Loss"."<br>";
					}
					echo "<small> Type of Bleeding : </small>"."<strong>".$row['i_e_bleeding']."</strong>"."<br>";
				}
				if($row['bleeding_class']!="NotEntered" || $row['i_e_bleeding']!="NotEntered"){
					echo "<hr>";					
				}
			}
		}
	?>
</div> 
<div class="fontsize" style="margin: 15px;padding-left: 50px;background-color:rgb(255, 200, 200);">
	<?php
		$sql="SELECT * FROM fracturespecific 
		WHERE idusers_afterlogin='".$userId."' 
		ORDER BY id DESC LIMIT 1;";

		$result=mysqli_query($conn,$sql);
		$resultcheck=mysqli_num_rows($result);
		if($resultcheck >0){
			while($row=mysqli_fetch_assoc($result)){
				if($row['type_open_closed']!="NotEntered" || $row['type_complete_incomplete']!="NotEntered" || $row['area_of_fracture']!='NotEntered'){
					echo "<center><small>Specific Details </small>: <strong>Fracture</strong></center>";					
				} 

				if($row['type_open_closed']!="NotEntered"){
					echo "<small> Closed/Open : </small>"."<strong>".$row['type_open_closed']."</strong>"."<br>";
				}

				if($row['type_complete_incomplete']!="NotEntered"){
					echo "<small> Complete/Incomplete : </small>"."<strong>".$row['type_complete_incomplete']."</strong>"."<br>";
				}

				if($row['area_of_fracture']!='NotEntered'){
					echo "<small> Area of Fracture : </small>"."<strong>".$row['area_of_fracture']."</strong>"."<br>";
				}
				if($row['type_open_closed']!="NotEntered" || $row['type_complete_incomplete']!="NotEntered" || $row['area_of_fracture']!='NotEntered'){
					echo "<hr>";					
				}
				}
			}
	?>
</div> 
<div class="fontsize" style="margin: 15px;padding-left: 50px;background-color:rgb(255,200,200);">
	<?php
		$sql="SELECT * FROM headdamagespecific 
		WHERE idusers_afterlogin='".$userId."' 
		ORDER BY id DESC LIMIT 1;";

		$result=mysqli_query($conn,$sql);
		$resultcheck=mysqli_num_rows($result);
		if($resultcheck >0){
			while($row=mysqli_fetch_assoc($result)){
				if($row['open_closed']!="NotEntered" || $row['velocity_injury']!="NotEntered" || $row['mild_moderate_severe']!='NotEntered'){
					echo "<center><small>Specific Details </small>: <strong>Head Damage</strong></center>";					
				} 

				if($row['open_closed']!="NotEntered"){
					echo "<small> Open/Closed : </small>"."<strong>".$row['open_closed']."</strong>"."<br>";
				}

				if($row['velocity_injury']!="NotEntered"){
					echo "<small> Velocity : </small>"."<strong>".$row['velocity_injury']."</strong>"."<br>";
				}
				
				if($row['mild_moderate_severe']!='NotEntered'){
					echo "<small> Severity : </small>"."<strong>".$row['mild_moderate_severe']."</strong>"."<br>";
				}
				if($row['open_closed']!="NotEntered" || $row['velocity_injury']!="NotEntered" || $row['mild_moderate_severe']!='NotEntered'){
					echo "<hr>";					
				}
				}
			}
	?>
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
</body>
</html>