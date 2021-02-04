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
    <link rel="stylesheet" href="assets/headerlogin-style.css">
</head>

<body>
    <div class="marginlayout container1">
        <div class="rotate">
            <div class="marginlayout font1 welcomepadding">
				<h1 style="text-align:center"><b>Prioritor - Final year project</b></h1>
			</div>
            <br>
            <center>
                <div>
                    <h2><b>Login Form</b></h2></div>
            </center>
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
                    <input type="checkbox" onclick="showpasswordfunction()">Show Password
                    <br>
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
                <span class="psw">Forget <a href="#">Password?</a></span>
                <br>
            </div>
    </div>

    <!-- password togger -->
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
