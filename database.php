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
    <script type="text/javascript" src="jquery.tabledit.js"></script>

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
                                <h4 class="card-title">Queries</h4>
                                <a href="#" class="btn btn-primary">> View Queries</a>
                            </div>
                        </div>
                    </p>
                </div>

                <div class="col-md-4">
                    <p style="">
                        <div class="card" style="width: 25rem; position: relative; padding: 15px; border: 1px solid gray; border-radius: 5px; ">
                            <img src="img/statsImage.jpg" width="175px" height="175px" class="card-img-top" alt="Add New Database">
                            <div class="card-body">
                                <h4 class="card-title">Database Statistics</h4>
                                <a href="#" class="btn btn-primary">> View Database Statistics %</a>
                            </div>
                        </div>
                    </p>
                </div>

                <div class="col-md-4">
                    <p style="">
                        <div class="card" style="width: 25rem; position: relative; padding: 15px; border: 1px solid gray; border-radius: 5px; ">
                            <img src="img/tableImage.jpg" width="175px" height="175px" class="card-img-top" alt="Add New Database">
                            <div class="card-body">
                                <h4 class="card-title">Tables</h4>
                                <button onclick="viewTable()" class="btn btn-primary">> View Tables</button>
                            </div>
                        </div>
                    </p>
                </div>
            </div>


        </div>

        <div class="container" id="edit" style="width: 50%; margin: 0 auto; display: none; position: relative; top: 75px">
            <!-- Example row of columns -->
            <h2 style="text-align: center">School Database Tables</h2>
            <p style="text-align: center"><a class="btn btn-primary btn-lg" href="database.php" role="button">Click here to go back to the School Dashboard page</a></p>

            <div class="row">
                <div class="col-md-4">
                    <p style="">
                        <div class="card" style="width: 25rem; position: relative; padding: 15px; border: 1px solid gray; border-radius: 5px; ">
                            <img src="img/tableImage.jpg" width="175px" height="175px" class="card-img-top" alt="Add New Database">
                            <div class="card-body">
                                <h4 class="card-title">Create a New Table</h4>
                                <a href="#" class="btn btn-primary">+ Create New Table</a>
                            </div>
                        </div>
                    </p>
                </div>

                <div class="col-md-4">
                    <p style="">
                        <div class="card" style="width: 25rem; position: relative; padding: 15px; border: 1px solid gray; border-radius: 5px; ">
                            <img src="img/tableImage.jpg" width="175px" height="175px" class="card-img-top" alt="Add New Database">
                            <div class="card-body">
                                <h4 class="card-title">Student Table</h4>
                                <button onclick="editTable()" class="btn btn-primary">> View/Edit Student Table</button>
                            </div>
                        </div>
                    </p>
                </div>

            </div>
        </div>

        <div class="container" id="student" style="width: 50%; margin: 0 auto; display: none; position: relative; top: 75px">
            <!-- Example row of columns -->
            <h2 style="text-align: center">School Database - Students Table</h2>
            <p style="text-align: center"><a class="btn btn-primary btn-lg" href="database.php" role="button">Click here to go back to the School Database table page</a></p>

            <br>
            <div class="table-responsive">
                <table id="data_table" class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Age</th>
                            <th>Major</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr data-row-id="1">
                            <td>1</td>
                            <td contenteditable="true">Spencer Pelton</td>

                            <td contenteditable="true">24</td>
                            <td contenteditable="true">IT - Game</td>

                        </tr>
                        <tr data-row-id="2">
                            <td>2</td>
                            <td contenteditable="true">Baker Mayfield</td>

                            <td contenteditable="true">25</td>
                            <td contenteditable="true">Athletic Administration</td>

                        </tr>
                        <tr data-row-id="3">
                            <td>3</td>
                            <td contenteditable="true">Nick Jonas</td>

                            <td contenteditable="true">19</td>
                            <td contenteditable="true">Fine Arts</td>

                        </tr>
                        <tr data-row-id="4">
                            <td>4</td>
                            <td contenteditable="true">Bill Gates</td>

                            <td contenteditable="true">42</td>
                            <td contenteditable="true">Computer Engineering</td>

                        </tr>

                    </tbody>
                </table>
            </div>
           
            <p style="font-weight: bold"> * Click in any cell to edit the table live</p>


            <div class="top-panel">
                <div class="btn-group">
                    
                    <button type="button" class="btn btn-success btn-lg dropdown-toggle" data-toggle="dropdown">Export <span class="caret"></span></button>
                    <ul class="dropdown-menu" role="menu">
                        <li><a class="export" data-export-type="csv">CSV</a></li>
                        <li><a class="export" data-export-type="excel">XLS</a></li>
                        <li><a class="export" data-export-type="txt">TXT</a></li>
                    </ul>
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

        function viewTable() {
            var a = document.getElementById("tables");
            var b = document.getElementById("edit");

            if (a.style.display === "none") {
                a.style.display = "block";
            } else {
                a.style.display = "none";
            }

            if (b.style.display === "block") {
                b.style.display = "none";
            } else {
                b.style.display = "block";
            }
        }

        function editTable() {
            var c = document.getElementById("edit");
            var d = document.getElementById("student");

            if (c.style.display === "none") {
                c.style.display = "block";
            } else {
                c.style.display = "none";
            }

            if (d.style.display === "block") {
                d.style.display = "none";
            } else {
                d.style.display = "block";
            }
        }
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            //for div
            //$("div:odd").css("background-color", "#F4F4F8");
            //$("div:even").css("background-color", "#EFF1F1");

            //for table row
            $("tr:even").css("background-color", "#F4F4F8");
            $("tr:odd").css("background-color", "#EFF1F1");
        });
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="tableExport/tableExport.js"></script>
    <script type="text/javascript" src="tableExport/jquery.base64.js"></script>
    <script src="js/custom_export.js"></script>
</body>

</html>