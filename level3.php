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
    <title>EasyDB - Level 3</title>
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
        <main role="main">
            <div id="wrap2">
                <h1>Level 3 Tutorial: Queries and Exporting Data</h1>

                <p>In this tutorial you will learn about the basics of selecting data and exporting sql code to database frontends. In our select section you will learn some select functions as well as conditional selects. Then at the end of the tutorial you will learn how to export all the files created using EasyDB.</p>

                <h3>Step 1: Select Statements</h3>

                <p>The main way data is interacted with in SQL is through select statements. Select statements are used to select out a specific sub-genre of data that you want to view. For example if there is a charity table that exists that stores how much a user has donated to charity with hundreds of records then you may want to see information about how many people have donated a specific amount or have donated at least X amount. </p>

                <p>To do this we use a SELECT statement. A SELECT statement is used to SELECT data FROM a table. The typical syntax looks like this:</p>

                <p>
                    <pre>SELECT column1, column2
FROM table_name;
</pre>
                </p>

                <p>Here column1 and column2 represent columns FROM the table. This select statement returns a view of only column1 and column2 and nothing else from table_name. To select all the columns from the table the syntax would look like this:</p>

                <p>
                    <pre>SELECT * 
FROM table_name;
</pre>
                </p>

                <p>In this statement the <b>*</b> is used to select all columns.</p>

                <h3>Step 1.1: Operators</h3>

                <p>Operators are useful additions to a select statement that modify what is being selected. The three operators we will cover are Where, Distinct, and Conditionals. The Select statement is still written the same to select the columns from a table. With the addition of an operator the columns returned will only return records that match the requirements of the operator.</p>

                <p>The most common operator that will be used in writing select statements is the WHERE operator. Typical syntax using the WHERE operator looks like this:</p>

                <p>
                    <pre>SELECT column1, column2
FROM table_name
WHERE column1 condition value;
</pre>
                </p>

                <p>The condition given must apply to a column header and use the following conditions:</p>

                <p>
                    <img src="img/operatorTable.png" />
                </p>

                <p>Apply the condition to a column to return only records where data in that column matches the condition.</p>

                <h3>Step 1.2: DISTINCT</h3>

                <p>Like the WHERE operator, DISTINCT is used to return only specific data. DISTINCT is used to return all data once. This is commonly used to find how many different types are in a column. Typical syntax of the DISTINCT operator looks like this:</p>

                <p>
                    <pre>SELECT DISTINCT Country FROM Customers;</pre>
                </p>

                <p>In this Select statement all Countries listed in the Customers table will be selected and shown once.</p>

                <p>This can be coupled with the COUNT function to count distinct values in a table:</p>

                <p>
                    <pre>SELECT COUNT(DISTINCT Country) FROM Customers;</pre>
                </p>

                <p>In this select statement the number of distinct countries would be returned.</p>

                <h2>Exporting SQL Code to Database Frontends</h2>

                <h3>Step 1: Navigate to Templates</h3>

                <p>Navigate to the <a href="templates.php">Database Templates page </a> and select a template you would like to import to your server.</p>

                <p>
                    <img width="75%" src="img/templatesImage.png" />
                </p>

                <h3>Step 2: Download Template</h3>

                <p>Download a template file from the templates page.</p>

                <p>
                    <img src="img/templateDownloadImage.png" /><br>
                    <img src="img/templateFileImage.png" />
                </p>

                <h3>Step 3: Import Downloaded File</h3>

                <p>Now we want to import the file into Database programs. Here are steps do this for several different ones:</p>

                <h4>phpMyAdmin</h4>

                <p>You can download phpMyAdmin <a href="https://www.phpmyadmin.net/">here.</a></p>

                <ol type="1">
                    <li>Create a database by selecting the new database option on the top right of the application.</li>
                    <li>After creating the database and naming it, select it in the dropdown menu below the create buttons.<br><img src="img/phpmyadmin.jpg" /></li>
                    <li>Select import from the top set of tabs.<br><img src="img/phpmyadminImport.png" /></li>
                    <li>Click the “Browse” button next to “Location of text file.”<br><img src="img/phpmyadminBrowse.png" /></li>
                    <li>Browse to the SQL file downloaded earlier and click open.</li>
                    <li>Click go.</li>
                </ol>

                <h4>SQL Server</h4>

                <p>You can download SQL Server <a href="https://www.microsoft.com/en-us/sql-server/sql-server-downloads">here.</a></p>

                <ol type="1">
                    <li>Create a database by selecting the new database option on the top left row of the application.</li>
                    <li>After creating the database and naming it, right click on your database and select Tasks > Import Data.<br><img src="img/sqlserver.png" /></li>
                    <li>The SQL server import and Export Wizard will open</li>
                    <li>Browse to and select the file that was downloaded in Step 2 and hit next.<br><img src="img/sqlserverBrowse.png" /></li>
                    <li>Enter the details of your database as follows:<ul>
                            <li>Select SQL Server Native Client 11.0 as destination</li>
                            <li>Servername should be the I{ address of your database.  This information is shown within your Fasthosts control panel.</li>
                            <li>Select “Use SQL SEerver Authentication” and enter your database username and password. (This is the same as the one that was created when the test database was made.</li>
                            <li>Select the test database form the drop down.</li>
                        </ul>
                        <br>
                        <img src="img/sqlserverFinish.png" />
                    </li>
                    <li>Select Next and choose all the tables you would like to import form the datafile.</li>
                </ol>

                <form action="level3-output.php" method="post">
                    <p style="text-align: center"> Now you are finished and we can display/run/import our code. Press the button below: <br><br>

                        <input type="submit" value="FINISHED!">
                    </p>
                </form>

            </div>
        </main>
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