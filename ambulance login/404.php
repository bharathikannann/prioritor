<!DOCTYPE html>
<html>
<head>
  <title>Error page</title>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="../assets/css/style404.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">
</head>
<body>
  <div class="hamburger-menu">
    <button class="burger" data-state="closed">
      <span></span>
      <span></span>
      <span></span>
    </button>
  </div>
  <nav data-state="closed">
    <ul>
    <li>
      <a href="#">Home</a>
    </li>
    <li>
      <!-- <a href="#">Services</a>
    </li>
    <li>
      <a href="#">About</a>
    </li>
    <li>
      <a href="#">Contact</a>
    </li> -->
    </ul>
  </nav>
  <main>
    <div class="container">
      <div class="row ml-5">
        <div class="col-md-6 align-self-center">  
        	<img class="img-fluid image" src="../assets/images/logo.png" height="50px" width="50px">
        <h1>404</h1>
          <h2>UH OH! You're lost.</h2>
          <p>Please Enter correct credentials. You entered wrong username and password. Please provide correct details. You can click the button below
            to go back to the loginpage.
          </p>
           <form action='includes/logout.inc.php' method='post'>
            <button type='submit' class="btn green" name='logout-submit'>Login in again</button>
        </form>
          
        </div>
      </div>
    </div>
  </main>
  <script src="../assets/js/sidebar.js"></script>
</body>
</html>