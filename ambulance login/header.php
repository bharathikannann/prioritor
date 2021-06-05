<?php 
session_start();
?>

<main>
	<?php 
	if(isset($_SESSION["userId"])){
		echo "<p>You are logged in!</p>";
		// require 'main page ambulance.php';
	header("Location: ../Data Entering/main page ambulance.php");
	}else{
		require '404.php';

	}	 
	?>
</main>


 