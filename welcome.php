<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome to EasyDB</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <style type="text/css">
        body{ text-align: center }
    </style>
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
    <!-- Navbar Container -->
    <div class="container">

        <!-- Navbar Header [contains both toggle button and navbar brand] -->
        <div class="navbar-header">
            <!-- Toggle Button [handles opening navbar components on mobile screens]-->
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#exampleNavComponents" aria-expanded="false">
                <i class="glyphicon glyphicon-align-center"></i>
            </button>

            <!-- Navbar Brand -->
            <a href="home.php" class="navbar-brand">
            <img src="img/smallLogo.png" class="d-inline-block align-top" alt = "Company Logo" height="30px" width="130px" />
            </a>
        </div>


        <!-- Navbar Collapse [contains navbar components such as navbar menu and forms ] -->
        <div class="collapse navbar-collapse" id="exampleNavComponents">

            <!-- Navbar Menu -->
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="home.php">Home</a>
                </li>
                <li>
                    <a href="database.php">Databases</a>
                </li>
                <li>
                    <a href="tutorials.php">Tutorials</a>
                </li>
                <li>
                    <a href="contact.php">Contact Us</a>
                </li>
                <!-- Navbar link with a dropdown menu -->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo htmlspecialchars($_SESSION["username"]); ?>
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="reset-password.php">Reset Password</a></li>
                        <li><a href="logout.php">Sign Out of Your Account</a></li>
                    </ul>
                </li>
            </ul>

            <!-- Navbar Form -->
        </div>
    </div>
</nav>

<main role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <div class="container">
          <h1>Hello, <?php echo htmlspecialchars($_SESSION["username"]); ?>!</h1>
          <p>EasyDB is a web application that provides users the ability to create databases, store information, and run insightful queries without needing prior database or coding knowledge. Click the link below to make a database today!</p>
          <p><a class="btn btn-primary btn-lg" href="database.php" role="button">Get Started &raquo;</a></p>
        </div>
      </div>

      <div class="container">
        <!-- Example row of columns -->
        <div class="row">
          <div class="col-md-4">
            <h2>Guided Learning</h2>
            <p>The application features a step by step questionnaire that automatically builds a database for a user through visual assistance, dropdown choices, and short answer text boxes. Not only will the application create the database, but also store the database inside the application while allowing exporting to other programs such as Microsoft Access or OpenOffice Base. </p>
            <p><a class="btn btn-secondary" href="tutorials.php" role="button">View details &raquo;</a></p>
          </div>
          <div class="col-md-4">
            <h2>Data Storage</h2>
            <p>EasyDB includes many different options for how to report and store data for different types of users. All data is secured and automatically updated through live tables connected to the cloud. Data can be updated, deleted, or created at anytime. Cut down on those tedious data spreadsheets and use EasyDB to help! </p>
            <p><a class="btn btn-secondary" href="database.php" role="button">View details &raquo;</a></p>
          </div>
          <div class="col-md-4">
            <h2>Beautiful Statistics</h2>
            <p>EasyDB shows you the data that matters. Not only is it easy to create databases, but also run meaningful queries that display on a user-friendly dashboard. Pull back stats behind your sheets within seconds. Try it today!</p>
            <p><a class="btn btn-secondary" href="database.php" role="button">View details &raquo;</a></p>
          </div>
        </div>

        <hr>

      </div> <!-- /container -->

    </main>

    <footer class="container">
      <p>&copy; EasyDB 2019-2020</p>
    </footer>

     <!-- jQuery CDN -->
     <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
         <!-- Bootstrap Js CDN -->
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>