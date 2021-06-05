<!DOCTYPE html>
<html>
<head>
	<title>Display</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" href="../assets/css/hospital-style.css">
    <link rel="stylesheet" href="../assets/css/navbar-displaydata.css">
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
</head>
<body class="m-2 p-2 zoom" style="border-radius:10px; ">
    <!-- Custom Navbar -->
	<div class="navbar-custom">
		<span class="navbar-toggle-custom m-2" id="js-navbar-toggle-custom">☰</span>
		<a href="#" class="logo-custom">Prioritor</a>
		<ul class="main-nav-custom mt-2" id="js-menu-custom">
			<li class="mt-3">
				<a href="../Display data.php" class="nav-links-custom">Home</a>
			</li>
			<li  class="mt-3 mr-4 ml-2">
				<a href="../Display data.php" class="nav-links-custom">Main page</a>
			</li>
			<li>
				<form class="logoutbtn m-2" action="../../includes/logout.inc.php" method="post">
					<button type="submit" name="logout-submit" class="p-2">Log Out</button>
				</form>
			</li>
		</ul>
	</div>
    
    <div class="row">
        <div class="col">
            <div class="card zoom hover-pointer" style="border-radius:10px;">
                <div class="card-body fontsize w-100 h=100 pl-4 mb-4"><br>
                    <h1 class="fontd fontsize mb-2">The Patient Details are :</h1>
                    <!--value -->
                    <small>
                        <label>Name : <span id="name"></span></label><br>
                        <label>Age : <span id="age"></span></label><br>
                        <label>Problem : <span id="problem"></span></label>
                    </small>
                </div>
            </div>
        <div>
    </div>
  <!-- Insert these scripts at the bottom of the HTML, but before you use any Firebase services -->

  <!-- Firebase App (the core Firebase SDK) is always required and must be listed first -->
  <script src="https://www.gstatic.com/firebasejs/8.2.6/firebase-app.js"></script>

  <!-- If you enabled Analytics in your project, add the Firebase SDK for Analytics -->
  <script src="https://www.gstatic.com/firebasejs/8.2.6/firebase-analytics.js"></script>

  <!-- Add Firebase products that you want to use -->
  <script src="https://www.gstatic.com/firebasejs/8.2.6/firebase-auth.js"></script>
  <script src="https://www.gstatic.com/firebasejs/8.2.6/firebase-firestore.js"></script>
  <script src="https://www.gstatic.com/firebasejs/8.2.6/firebase-database.js"></script>
  <!-- The core Firebase JS SDK is always required and must be listed first -->

    <!-- TODO: Add SDKs for Firebase products that you want to use
        https://firebase.google.com/docs/web/setup#available-libraries -->

    <script>
    // Your web app's Firebase configuration
    var firebaseConfig = {
        apiKey: "AIzaSyAhUv9ufyWocqtueROQNwXn1QrkQYla86w",
        authDomain: "prioritor-qifguk.firebaseapp.com",
        databaseURL: "https://prioritor-qifguk.firebaseio.com",
        projectId: "prioritor-qifguk",
        storageBucket: "prioritor-qifguk.appspot.com",
        messagingSenderId: "764967610768",
        appId: "1:764967610768:web:9c9b911ecbbe50b8906b15"
    };
    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
    </script>
    <script>
        var ref = firebase.database().ref('prioritor/');

    ref.on("value", function(snapshot) {
    age = snapshot.val().patient_age
    name = snapshot.val().patient_name
    problem = snapshot.val().patient_problem
    document.getElementById("age").innerHTML = age;
    document.getElementById("name").innerHTML = name;
    document.getElementById("problem").innerHTML = problem;
    }, function (error) {
    console.log("Error: " + error.code);
    });
    </script>
    <script src="../assets/js/navbar.js"></script>
</body>
</html>


