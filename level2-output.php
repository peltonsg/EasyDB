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
    <title>EasyDB - Level 2 Output</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <style type="text/css">
        #wrap {

            text-align: center;
        }

        pre {
            background: white;
            border: 1px solid #ddd;
            border-left: 3px solid #f36d33;
            color: #666;
            page-break-inside: avoid;
            font-family: monospace;
            font-size: 15px;
            line-height: 1.6;
            margin-bottom: 1.6em;
            max-width: 100%;
            overflow: auto;
            padding: 1em 1.5em;
            display: block;
            word-wrap: break-word;
        }

        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }

        #wrap2 {
            display: inline-block;
            text-align: left;
            width: 58%;
            background-color: #f2f2f2;
            padding: 10px
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
                        <a href="welcome.php">Home</a>
                    </li>
                    <li>
                        <a href="templates.php">Database Templates</a>
                    </li>
                    <li class="active">
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
<br><br><br>
    <div id="wrap">
        <div id="wrap2">
            <h1>Congrats <?php echo htmlspecialchars($_SESSION["username"]); ?> on completing Level 2 Tutorial!</h1>

            <p>All example code used is displayed below and can be downloaded. For help exporting and querying data make sure to continue on to the <a href="level3.php">Level 3 Tutorial</a>!</p>

            <h4> Code </h4>
            <p>
                <pre>ADD Firstname Varchar(30);<br><br>ADD item_description VARCHAR(30) NOT NULL);<br><br>CREATE TABLE People(
FirstName Varchar(30) NOT NULL,
LastName Varchar(30) NOT NULL,
NickName Varchar(30) 
);<br>
CREATE TABLE People(
ID int NOT NULL UNIQUE,
FirstName Varchar(30) NOT NULL,
LastName Varchar(30) NOT NULL,
);<br>
CREATE TABLE People(
ID int NOT NULL,
FirstName Varchar(30) NOT NULL,
LastName Varchar(30) NOT NULL,
CONSTRAINT UC_People UNIQUE (ID, LastName)
);<br>
CREATE TABLE People(
FirstName Varchar(30) NOT NULL,
LastName Varchar(30) NOT NULL,
Age int CHECK (Age >=18) 
);<br>
CREATE TABLE People(
FirstName Varchar(30) NOT NULL,
LastName Varchar(30) NOT NULL,
City varchar(30) DEFAULT ‘Cincinnati’
);
                </pre>
            </p>

            <h3>Export</h3>
            <p text-align: center> <?php echo htmlspecialchars($_SESSION["username"]); ?>, you can download the code and export it to any database program by clicking the button below: <br><br>
                <button type="submit" onclick="window.open('dbts/Level2.sql')">Download</button></p>

        </div>
    </div>
    <footer class="container" style="text-align: center">
        <p>&copy; EasyDB 2019-2020</p>
    </footer>

    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <!-- Bootstrap Js CDN -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>