<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Crimson+Text|Work+Sans:400,700" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	<style type="text/css">
		body {
		font-family: "Poppins", sans-serif;
		background-color: 	rgb(255, 230, 230);
		}

		.font1{
     		font-family: "Work Sans", sans-serif;
 		}

		form{
			border: 3px solid #f1f1f1;	
		}


		.marginlayout{
			border-color: black;
		}

		#widthbtn{
		width:50%;
		}

		.center {
		  display: block;
		  margin-left: auto;
		  margin-right: auto;
		}

		input[type=text],input[type=password],select{
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
		.widthdiv{
			width=40%;
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

		.container1{
			padding: 20px 40px 10px 40px;
		}
		.container2{
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

		.redcolor{
			color:red;
		}

		.rotate{
			display: flex;
			flex-direction: column;
		}

		.welcomepadding{
			padding:10px;
		}
		

		div.marginlayout {
		  border-style: solid;
		  border-color: white;
		  box-sizing: 10px;
		}
		/*@media only screen and (min-width: 800px) {
		  body {
		    width: 80%;
		  }
		}
		@media only screen and (min-width: 1200px) {
		  body {
		    width: 60%;
		  }
		}*/
		
	</style>
</head>
<body>
	
		<div class="marginlayout container1">
			<div class="rotate">
				<div class="marginlayout font1 welcomepadding"><h1 style="text-align:center"><b>Prioritor</b></h1></div><br>
				<center><div><h2><b>Login Form</b></h2></div></center>
			    
			</div>
			<?php
				if (isset($_GET["error"])) {
	 		if ($_GET["error"]=="selectusertype") {
	 			echo '<center><h3 class="redcolor">Select User Type fields</h3></center>';
	 		   }
	 		}
			?>
		<form action="includes/login.inc.php" method="post">
			<div class="container2" style="background-color: white">
				<label for="usname"><b>username</b></label>
				<input type="text" placeholder="Enter Username" name="mailuid" id="username" class="form-control">

				<label for="psw"><b>Password</b></label>
				<input type="password" placeholder="Enter Password" name="pwd" id="psinput" class="form-control">

	            <script type="text/javascript" src="script.js"></script>
				<input type="checkbox" onclick="showpasswordfunction()">Show Password<br>

				<select name="adminuser" class="custom-select">
					<option value="admin">Admin</option>
					<option value="user">User</option>
				</select>
			</div>
	    
	    	<div class="container2">
				<button type="submit" class="button1" id="loginbutton" name="login-submit">Login</button>
			</div>
			<div>
				<big><center>New User :<a href="signup.php" class="colora"> Sign Up</a></h2></center><h2></big>
			</div>	

		</form>
			<div class="container1">
				<span class="psw">Forget <a href="#">Password?</a></span><br>
				
				</div>
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
</body>
</html>