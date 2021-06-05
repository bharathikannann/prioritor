<!DOCTYPE html>
<html>
<head>
  <title>Ambulance Login </title>
  <link rel="stylesheet" type="text/css" href="assets/headerlogin-style.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  <div class="log-form">
  <h2>PRIORITOR - AMBULANCE LOGIN</h2>
  <?php
			if (isset($_GET["error"])) {
		if ($_GET["error"]=="selectusertype") {
			echo '<center><h3 class="redcolor">Select User Type fields</h3></center>';
			}
		}
		?>
  <form action="includes/login.inc.php" method="post">
    <strong><label class="opacity label" for="usname">Email</label></strong>
    <input type="text" title="username" placeholder="username" class="input" name="mailuid"/>
    <strong><label class="opacity" for="psw">Password</label></strong>
    <input type="password" title="username" placeholder="password" class="input" id="psinput" name="pwd"/>
    <input type="checkbox" onclick="showpasswordfunction()"><label class="passwordlabel">Show Password</label>
    <br><br>
    <button type="submit" class="btn" name="login-submit">Login</button>
  </form>
  <a class="ambulanceredirect" href="../index.php"><span class="newuser">Return : </span>Back</a>
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
    <script src="../assets/js/sidebar.js"></script>
</body>
</html>
