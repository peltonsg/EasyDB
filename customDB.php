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
    <title>EasyDB - CustomDB</title>
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
                <h1>Create Your Own Custom Database</h1>

                <p>This section is a non-tutorial area to quickly create your own database with custom values. After entering any values in select the finished button at the bottom for your code.</p>

                <p><b>Note:</b> If you require more columns, different queries, or other values restart this page after getting your other imports to obtain any other information you want to add to your database. Just make sure to save your work! before restarting!</p>

                <p>If you are on this page and do not understand what is happening please do our <a href="tutorials.php">tutorials here</a> first.</p>

                <h3>Creating a Database</h3>

                <form action="customDB-output.php" method="post">
                    <p>
                        <pre>CREATE DATABASE <input type="text" onfocus="this.value=''" name="dbname" value="Enter Database Name..."></pre>
                    </p>

                    <h3>Creating Tables</h3>

                    <p>
                        <pre>CREATE TABLE <input type="text" onfocus="this.value=''" name="tablename" value="Enter Table Name...">(<input type="text"  onfocus="this.value=''" name="column1name" value="Enter Column Name..."> <input type="text"  onfocus="this.value=''" name="datatype1" value="Enter Datatype...">)</pre>
                    </p>

                    <h3>Adding Columns to Tables</h3>

                    <p>
                        <pre>ALTER TABLE <input type="text" onfocus="this.value=''" name="nameofTableagain" value="Enter Table Name...">  ADD (<input type="text" onfocus="this.value=''" name="column2name" value="Enter a Column Name..."> <input type="text"  onfocus="this.value=''" name="datatype2" value="Enter Datatype...">)</pre>
                    </p>

                    <h3>Creating/Adding Primary Keys</h3>

                    <p>
                        <pre>Alter <input type="text" onfocus="this.value=''" name="tablename2" value="Enter table name...">
        ADD PRIMARY KEY <input type="text" onfocus="this.value=''" name="itemID" value="Enter the name of the primary key column..."></pre>
                    </p>

                    <h3>Creating a Linking Table</h3>

                    <p>
                        <pre>CREATE TABLE <input type="text" onfocus="this.value=''" name="linktable" value="Enter a value for the linked table's name..."> (
        FOREIGN KEY (<input type="text" onfocus="this.value=''" name="itemID2" value="Enter the name of the item ID e.g. 'ItemID'...">) REFERENCES <input type="text" onfocus="this.value=''" name="tabone1" value="Enter table name..."> (<input type="text" onfocus="this.value=''" name="itemID3" value="Enter the name of the foreign key column...">)
        FOREIGN KEY (<input type="text" onfocus="this.value=''" name="roomID" value="Enter the name of the second foreign key...">) REFERENCES <input type="text" onfocus="this.value=''" name="tablename3" value="Enter table two's name...">(<input type="text" onfocus="this.value=''" name="itemID4" value="Enter the name of the other foreign key...">)
        );</pre>
                    </p>

                    <h2>Queries</h2>

                    <p>
                        <pre>SELECT <input type="text" onfocus="this.value=''" name="column3name" value="Enter a Column Name...">
FROM <input type="text" onfocus="this.value=''" name="tablename5" value="Enter table name...">;
</pre>
                    </p>

                    <p>
                        <pre>SELECT DISTINCT <input type="text" onfocus="this.value=''" name="column4name" value="Enter a Column Name..."> FROM <input type="text" onfocus="this.value=''" name="tablename6" value="Enter table name...">;</pre>
                    </p>

                    <p style="text-align: center"> Now you are finished and we can display/run our code. Press the button below: <br><br>

                        <input type="submit" value="FINISHED!">
                    </p>
                </form>


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