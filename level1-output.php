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
    <title>EasyDB - Level 1 Output</title>
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

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}

        #wrap2 {display: inline-block; text-align: left; width: 58%; background-color: #f2f2f2; padding: 10px}
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
                <li class="active">
                    <a href="welcome.php">Home</a>
                </li>
                <li>
                    <a href="database.php">Database Templates</a>
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
    <div id="wrap2">
    <h1>Congrats <?php echo htmlspecialchars($_SESSION["username"]); ?> on completing Level 1 and the <?php echo $_POST["dbname"]; ?>  Database! </h1>

    
        
    <h3>Outputs</h3>

    <h4> Code </h4>
<p><pre>
CREATE DATABASE <?php echo $_POST["dbname"]; ?>

CREATE TABLE <?php echo $_POST["tablename"]; ?> (<?php echo $_POST["column1name"]; ?> VARCHAR(30) NOT NULL)

ALTER TABLE <?php echo $_POST["tablename"]; ?>
ADD (<?php echo $_POST["column2name"]; ?>VARCHAR(30) NOT NULL)
ADD (<?php echo $_POST["column3name"]; ?>int NOT NULL)

CREATE TABLE <?php echo $_POST["table2name"]; ?> (<?php echo $_POST["roomname"]; ?>VARCHAR(30) NOT NULL)

ALTER TABLE <?php echo $_POST["table2name"]; ?>
ADD (<?php echo $_POST["tb2description"]; ?> VARCHAR(30))

ALTER <?php echo $_POST["tablename"]; ?>
ADD <?php echo $_POST["itemID"]; ?> int;
ALTER <?php echo $_POST["tablename"]; ?>
ADD PRIMARY KEY <?php echo $_POST["itemID"]; ?>

ALTER <?php echo $_POST["table2name"]; ?>
ADD <?php echo $_POST["roomID"]; ?> int;
ALTER <?php echo $_POST["table2name"]; ?>
ADD PRIMARY KEY <?php echo $_POST["roomID"]; ?>

CREATE TABLE <?php echo $_POST["linktable"]; ?> (
    FOREIGN KEY (<?php echo $_POST["itemID"]; ?>) REFERENCES <?php echo $_POST["tablename"]; ?>(<?php echo $_POST["itemID"]; ?>)
    FOREIGN KEY (<?php echo $_POST["roomID"]; ?>) REFERENCES <?php echo $_POST["table2name"]; ?>(<?php echo $_POST["roomID"]; ?>)
)


</pre></p>

    <h4> Tables </h4>
        <h5>Table 1: <?php echo $_POST["tablename"]; ?> </h5>

        <table style="width:100%">
  <tr>
    <th><?php echo $_POST["column1name"]; ?></th>
    <th><?php echo $_POST["column2name"]; ?></th>
    <th><?php echo $_POST["column3name"]; ?></th>
    <th><?php echo $_POST["itemID"]; ?></th>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
</table>

<h5>Table 2: <?php echo $_POST["table2name"]; ?> </h5>

        <table style="width:100%">
  <tr>
    <th><?php echo $_POST["roomname"]; ?></th>
    <th><?php echo $_POST["tb2description"]; ?></th>
    <th><?php echo $_POST["roomID"]; ?></th>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
  </tr>
</table>

<h5>Table 3: <?php echo $_POST["linktable"]; ?> </h5>

        <table style="width:100%">
  <tr>
    <th><?php echo $_POST["itemID"]; ?></th>
    
    <th><?php echo $_POST["roomID"]; ?></th>
  </tr>
  <tr>
    <td></td>
    <td></td>
    
  </tr>
  <tr>
    <td></td>
    <td></td>
    
  </tr>
</table>
    

<h3>Export</h3>
    <p text-align: center> <?php echo htmlspecialchars($_SESSION["username"]); ?>, you can download  the code and export it to any database program by clicking the button below: <br><br>
    <button type="submit" onclick="window.open('dbts/Level1.sql')">Download</button></p>

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