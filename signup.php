<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Priotitor</title>
	<link rel="stylesheet" type="text/css" href="styleindex.css">
	<link rel="stylesheet" type="text/css" href="testconnect.html">
	<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Crimson+Text|Work+Sans:400,700" rel="stylesheet">
	<style type="text/css">
		body {
		font-family: 'Poppins', sans-serif;
		display: flex;
		background-color: 	rgb(255, 230, 230);
		}

		.font1{
     		font-family: 'Work Sans', sans-serif;
  		}
  		.redcolor{
  			color:red;
  		}

		form{
			border: 3px solid #f1f1f1;	
		}

		img{
			width:50%;
			height:50%;

		}

		.marginlayout{
			border-color: black;
		}

		.center {
		  display: block;
		  margin-left: auto;
		  margin-right: auto;
		}

		input[type=text],input[type=password],input[type=email]{
			width: 100%;
			padding: 12px 20px;
			margin: 8px 0;
			border: 1px solid #ccc;
			box-sizing: border-box;
		}

		h1{
		  font-size:300%;
		  text-align: center;
		  color: red;
		  padding: 0px;
		}

		button{
			border-radius: 4px;
			background-color: #4CAF50;
			color: white;
			padding: 14px 20px;
			margin: 8px 0;
			cursor: pointer;
			border: none;
			width: 100%;
			-webkit-transition-duration: 0.4s; /* Safari */
		  transition-duration: 0.4s;
		}

		button:hover{
			background-color: #4CAF50; /* Green */
		  color: white;
		}

		.button1 {
		  background-color: #4CAF50; 
		  color: white; 
		  border: 2px solid #4CAF50;
		}

		.button1:hover {
		  background-color: white;
		  color: #4CAF50;
		}

		.cancelbtn{
			width: auto;
			padding: 10px 18px;
			background-color: #f44336;
		}

		.container{
			padding: 50px;
		}
		span.psw{
			float:right;
			padding-top: 16px; 
		}

		.button2 {
		  background-color: #f44336; 
		  color: white; 
		  border: 2px solid #f44336;
		}

		.button2:hover {
		  background-color: white;
		  color: #f44336;
		}

		.rotate{
			display: flex;
			flex-direction: column;
		}

		.flex-container{
			display: flex;
			background-color: 	rgb(255, 230, 230);
		}

		div.marginlayout {
		  border-style: solid;
		  border-color: white;
		  box-sizing: 10px;
		}
	</style>
</head>
<body>
	 <main>

	 		
	 		<div class="marginlayout container">
	 			<div class="rotate">
	 				<div class="marginlayout font1"><h1 style="text-align:center"><b>Welcome to Prioritor</b></h1></div>
	 				<div><h2><b>Registration Form</b></h2></div>
	 			    
	 			</div>
	 	<?php 
	 	if (isset($_GET["error"])) {
	 		if ($_GET["error"]=="emptyfields") {
	 			echo '<center><h3 class="redcolor">Fill in all the fields</h3></center>';
	 		}else if($_GET["error"]=="invalidmailuid") {
	 			echo '<center><h3 class="redcolor">Invalid user name and e-mail</h3></center>';
	 		}else if($_GET["error"]=="invalidmail") {
	 			echo '<center><h3 class="redcolor">Invalid e-mail</h3></center>';
	 		}else if($_GET["error"]=="invaliduid") {
	 			echo '<center><h3 class="redcolor">Invalid user name</h3></center>';
	 		}else if($_GET["error"]=="passwordcheck") {
	 			echo '<center><h3 class="redcolor">Your Password do not match</h3></center>';
	 		}else if($_GET["error"]=="usertaken") {
	 			echo '<center><h3 class="redcolor">User is already taken</h3></center>';
	 		}
	 	}
	 	 
	 	?>
	 	<form action="includes/signup.inc.php" method="post">
	 		<div class="container" style="background-color: white">
	 						<label for="usname"><b>Username</b></label>
	 						<input type="text" placeholder="Enter Username" name="uid" id="username">

	 						<label for="email"><b>Email Id</b></label>
	 						<input type="email" placeholder="Enter EmailId" name="mail" id="emailid">

	 						<label for="psw"><b>Password</b></label>
	 						<input type="password" placeholder="Enter Password" name="pwd" id="psinput">

	 						<label for="psw"><b>Repeat Password</b></label>
	 						<input type="password" placeholder="Enter Password" name="pwd-repeat" id="psinput">

	 			            <script type="text/javascript" src="script.js"></script>
	 						<input type="checkbox" onclick="showpasswordfunction()">Show Password<br>

	 						
	 					</div>
	 			    
	 			    	<div class="container">
	 						<button type="submit" class="button1" id="loginbutton" name="signup-submit" onclick="validate()">Sign Up</button>

	 						<label>
	 							<input type="checkbox" checked="checked" name="remember">Remember me
	 						</label>
	 					</div>
	 	</form>
	 </div>
	 	<script type="text/javascript">
	 		function showpasswordfunction(){
	 		var x=document.getElementById("psinput");
	 		if (x.type==="password"){
	 			x.type="text";
	 		}else{
	 			x.type="password"
	 		}
	 		}
	 	</script>
	 </main>
</body>

