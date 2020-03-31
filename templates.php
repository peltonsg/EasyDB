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
    <title>EasyDB - Database Templates</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <style type="text/css">
        .wrapper {
		display: grid;
    grid-gap: 10px;
		grid-template-columns: 500px 500px 500px;
		background-color: #fff;
		color: #444;
	}

    #wrap {
            display: flex;
            align-items: center;
            justify-content: center;
        }

	.box {
		background-color: #f2f2f2;
		color: black;
		border-radius: 5px;
		padding: 20px;
		font-size: 150%;

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
            <img src="img/smallLogo.png" class="d-inline-block align-top" alt = "Company Logo" height="30px" width="130px" />
            </a>
        </div>


        <!-- Navbar Collapse [contains navbar components such as navbar menu and forms ] -->
        <div class="collapse navbar-collapse" id="exampleNavComponents">

            <!-- Navbar Menu -->
            <ul class="nav navbar-nav navbar-right">
                <li >
                    <a href="welcome.php">Home</a>
                </li>
                <li class="active">
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
<br><br><br><br>

    <div id="wrap">
    <div class="wrapper">
		<div class="box a"><img src="img/product.png" height="250px" width="460px"  alt="Product" /><br>Product Stock and Orders <p style="font-size: 80%">Product stock location and orders for a business with multiple storage locations.
Use case for this database would be for a company that needed to store orders of their products and search for the stock of their products in separate rooms at separate locations.  This database would also be able to store information about users and products and they’re various locations.
</p></div>
		<div class="box b">B</div>
		<div class="box c">C</div>
		<div class="box d">D</div>
		<div class="box e">E</div>
		<div class="box f">F</div>
	</div>

    </div>

<hr>
    <footer class="container" style="text-align: center">
      <p>&copy; EasyDB 2019-2020</p>
    </footer>

     <!-- jQuery CDN -->
     <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
         <!-- Bootstrap Js CDN -->
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>