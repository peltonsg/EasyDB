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
    <title>EasyDB - CustomDB Output</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <style type="text/css">
        #wrap {

            text-align: center;
        }

        #wrap2 {
            display: inline-block;
            text-align: left;
            width: 58%;
            background-color: #f2f2f2;
            padding: 10px
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

        input[type=submit] {
            width: 40%;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<!-- #f4f4f4 -->

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
    </nav><br><br><br>
    <div id="wrap">
        <main role="main">
            <div id="wrap2">
            <h1>Congrats <?php echo htmlspecialchars($_SESSION["username"]); ?> on completing a Custom Database! </h1>

            <h3>Outputs</h3>

      <h4> Code </h4>
      <p>
        <pre>
CREATE DATABASE <?php echo $_POST["dbname"]; ?>; 

CREATE TABLE <?php echo $_POST["tablename"]; ?> (<?php echo $_POST["column1name"]; ?> <?php echo $_POST["datatype1"]; ?>);

ALTER TABLE <?php echo $_POST["nameofTableagain"]; ?>&nbsp;
ADD (<?php echo $_POST["column2name"]; ?> <?php echo $_POST["datatype2"]; ?>);

ALTER <?php echo $_POST["tablename2"]; ?>&nbsp;
ADD PRIMARY KEY <?php echo $_POST["itemID"]; ?>;

CREATE TABLE <?php echo $_POST["linktable"]; ?> (
    FOREIGN KEY (<?php echo $_POST["itemID2"]; ?>) REFERENCES <?php echo $_POST["tabone1"]; ?>(<?php echo $_POST["itemID3"]; ?>)
    FOREIGN KEY (<?php echo $_POST["roomID"]; ?>) REFERENCES <?php echo $_POST["table3name"]; ?>(<?php echo $_POST["itemID4"]; ?>)
);<br><br>SELECT <?php echo $_POST["column3name"]; ?>
FROM <?php echo $_POST["tablename5"]; ?>;<br><br>SELECT DISTINCT <?php echo $_POST["column4name"]; ?> FROM <?php echo $_POST["tablename6"]; ?>;</pre>
      </p>

      <h3>Export</h3>
      
      <p text-align: center>For help exporting data make sure to check out our <a href="level3.php">Level 3 Tutorial</a>! <?php echo htmlspecialchars($_SESSION["username"]); ?>, you can download the code and export it to any database program by clicking the button below: <br><br>
        <button type="submit" onclick="window.open('dbts/customDB.sql')">Download</button></p>

            </div>
        </main>
    </div>
    <br>
    <footer class="container" style="text-align: center">
        <p>&copy; EasyDB 2019-2020</p>
    </footer>

    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <!-- Bootstrap Js CDN -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>