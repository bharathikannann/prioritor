<?php 
session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Login Page</title>
	</head>
	<body>
		<nav>
			<div>
				<?php 
					if(isset($_SESSION["userId"])){
						echo '<form class="" action="includes/logout.inc.php" method="post">
					<button type="submit" name="logout-submit">Log Out</button>
				</form>';
					 	}else{
					 		require 'headerloginpage.php';
					 	}	 
				?>
			</div>
		</nav>
	</body>
</html>