<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
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
    body {
      text-align: center
    }
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
        <a href="welcome.php" class="navbar-brand">
          <img src="img/smallLogo.png" class="d-inline-block align-top" alt="Company Logo" height="30px" width="130px" />
        </a>
      </div>


      <!-- Navbar Collapse [contains navbar components such as navbar menu and forms ] -->
      <div class="collapse navbar-collapse" id="exampleNavComponents">

        <!-- Navbar Menu -->
        <ul class="nav navbar-nav navbar-right">
          <li>
            <a href="#">Home</a>
          </li>
          <li>
            <a href="templates.php">Database Templates</a>
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
        <img class="mb-4" src="img/logo.png" alt="Company Logo" />
        <h1>Hello, <?php echo htmlspecialchars($_SESSION["username"]); ?>!</h1>
        <p style="text-align: left">EasyDB is a web application that provides users the ability to create databases, learn technical information, download database templates, and run insightful queries without needing prior database or coding knowledge. Click the link below to make a database today!</p>
        <p><a class="btn btn-primary btn-lg" href="tutorials.php" role="button">Get Started &raquo;</a></p>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <h2>Guided Learning</h2>
          <p style="text-align: left">The application features three levels of tutorials that will make anyone a database expert. Build a database step by step with follow along code instructions using easy input boxes. Through EasyDB's tutorials you will create a fully functional database that can be used by you! Not only will the application create the database, but also store the database inside the application while allowing exporting to other programs such as Microsoft Access or OpenOffice Base. </p>
          <p><a class="btn btn-secondary" href="tutorials.php" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h2>Database Templates</h2>
          <p style="text-align: left">EasyDB includes many different options for how to save and export data for different types of users. With our Database Templates any person will be able to get there data stored and saved within minutes. Make them your own and pick ones similar to your current data needs. Data can be updated, deleted, or created at anytime. Cut down on those tedious data spreadsheets and use EasyDB to help! </p>
          <p><a class="btn btn-secondary" href="database.php" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h2>Create Databases Quickly </h2>
          <p style="text-align: left">EasyDB helps you create and run databases within mere minutes. Check out the create your own custom database with our step by step form. Not only is it easy to create databases, but also run meaningful queries or download our quickstart templates. Databases are necessary in today's world and EasyDB is the place to figure out how to store your data!</p>
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