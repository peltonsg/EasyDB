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
    <title>EasyDB - Database Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <style type="text/css">
        body {}
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
                    <img src="img/smallLogo.png" class="d-inline-block align-top" alt="Company Logo" height="30px" width="130px" />
                </a>
            </div>


            <!-- Navbar Collapse [contains navbar components such as navbar menu and forms ] -->
            <div class="collapse navbar-collapse" id="exampleNavComponents">

                <!-- Navbar Menu -->
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="home.php">Home</a>
                    </li>
                    <li class="active">
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
        <div class="container" id="databases" style="width: 50%; margin: 0 auto;">
            <!-- Example row of columns -->
            <div class="row">
                <div class="col-md-4">
                    <p style="">
                        <div class="card" style="width: 25rem; position: relative; top: 75px; padding: 15px; border: 1px solid gray; border-radius: 5px; ">
                            <img src="img/newDatabaseImage.png" width="175px" height="175px" class="card-img-top" alt="Add New Database">
                            <div class="card-body">
                                <h4 class="card-title">Create a New Database</h4>
                                <p class="card-text">This button is the first step in creating a relational database. Click below to get started making your new database.</p>
                                <a href="#" class="btn btn-primary">+ Create New Database</a>
                            </div>
                        </div>
                    </p>
                </div>

                <div class="col-md-4">
                    <p style="">
                        <div class="card" style="width: 25rem; position: relative; top: 75px; padding: 15px; border: 1px solid gray; border-radius: 5px; ">
                            <img src="img/existingDatabaseImage.png" width="175px" height="175px" class="card-img-top" alt="Add New Database">
                            <div class="card-body">
                                <h4 class="card-title">School</h4>
                                <p class="card-text">Dashboard for Queries and Tables inside the School database. Click here to access your School database.</p>
                                <button onclick="viewDatabase()" class="btn btn-primary">View School Database</button>
                            </div>
                        </div>
                    </p>
                </div>

                <div class="col-md-4">
                    <p style="">
                        <div class="card" style="width: 25rem; position: relative; top: 75px; padding: 15px; border: 1px solid gray; border-radius: 5px; ">
                            <img src="img/existingDatabaseImage.png" width="175px" height="175px" class="card-img-top" alt="Add New Database">
                            <div class="card-body">
                                <h4 class="card-title">Business</h4>
                                <p class="card-text">Dashboard for Queries and Tables inside the Business database. Click here to access your Business database.</p>
                                <a href="#" class="btn btn-primary">View Business Database</a>
                            </div>
                        </div>
                    </p>
                </div>

            </div>
        </div>

        <div class="container" id="tables" style="width: 50%; margin: 0 auto; display: none; position: relative; top: 75px">

            <div class="jumbotron">
                <div class="container">
                    <h2 style="text-align: center">School Database Dashboard</h2>
                    <p>Create, view, or edit your School database below. Tables, Statistics, and Queries can all be found on this dashboard. </p>
                    <p style="text-align: center"><a class="btn btn-primary btn-lg" href="database.php" role="button">Click here to go back to the main Databases page</a></p>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <p style="">
                        <div class="card" style="width: 25rem; position: relative; padding: 15px; border: 1px solid gray; border-radius: 5px; ">
                            <img src="img/queryImage.png" width="175px" height="175px" class="card-img-top" alt="Add New Database">
                            <div class="card-body">
                                <h4 class="card-title">Create a New Query</h4>
                                <a href="#" class="btn btn-primary">+ Create New Query</a>
                            </div>
                        </div>
                    </p>
                </div>

                <div class="col-md-4">
                    <p style="">
                        <div class="card" style="width: 25rem; position: relative; padding: 15px; border: 1px solid gray; border-radius: 5px; ">
                            <img src="img/statsImage.jpg" width="175px" height="175px" class="card-img-top" alt="Add New Database">
                            <div class="card-body">
                                <h4 class="card-title">Show Database Statistics</h4>
                                <a href="#" class="btn btn-primary">% View Database Statistics</a>
                            </div>
                        </div>
                    </p>
                </div>

                <div class="col-md-4">
                    <p style="">
                        <div class="card" style="width: 25rem; position: relative; padding: 15px; border: 1px solid gray; border-radius: 5px; ">
                            <img src="img/tableImage.jpg" width="175px" height="175px" class="card-img-top" alt="Add New Database">
                            <div class="card-body">
                                <h4 class="card-title">Create a New Table</h4>
                                <button onclick="createTable()" class="btn btn-primary">+ Create New Table</button>
                            </div>
                        </div>
                    </p>
                </div>
            </div>


        </div>


    </main>



    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <!-- Bootstrap Js CDN -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script>
        function viewDatabase() {
            var x = document.getElementById("databases");
            var y = document.getElementById("tables");

            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }

            if (y.style.display === "block") {
                y.style.display = "none";
            } else {
                y.style.display = "block";
            }
        }

        function createTable() {
            var x = document.getElementById("tables");
            var y = document.getElementById("edit");

            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }

            if (y.style.display === "block") {
                y.style.display = "none";
            } else {
                y.style.display = "block";
            }
        }


    </script>
</body>

</html>