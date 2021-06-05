<!DOCTYPE html>
<html>
<head>
  <title>Sign Up</title>
  <link rel="stylesheet" type="text/css" href="assets/css/headerlogin-style.css">
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  <div class="log-form">
  <h2>PRIORITOR - ACCOUNT SIGNUP</h2>
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
    <strong><label class="opacity label" for="usname">Username</label></strong>
    <input type="text" title="username" placeholder="username" class="input" name="uid"/>
    <strong><label class="opacity label" for="email">Email Id</label></strong>
    <input type="text" title="email" placeholder="email" class="input" name="mail"/>
    <strong><label class="opacity" for="psw">Password</label></strong>
    <input type="password" title="username" placeholder="password" class="input" name="pwd"/>
    <strong><label class="opacity" for="psw">Repeat Password</label></strong>
    <input type="password" title="username" placeholder="password" class="input" id="psinput" name="pwd-repeat"/>
    <input type="checkbox" onclick="showpasswordfunction()"><label class="passwordlabel">Show Password</label><br><br>
    <button type="submit" class="btn" name="signup-submit" onclick="validate()">Sign up</button>

    <a class="forgot" href="headerloginpage.php"><span class="newuser">Already Regitered :</span>Login</a>
  </form>
</div><!--end log form -->
<script type="text/javascript">
        function showpasswordfunction() {
            var x = document.getElementById("psinput");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password"
            }
        }

    </script>
</body>
</html>
