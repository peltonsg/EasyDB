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
    <title>EasyDB - Home</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <style type="text/css">
        #wrap {
            
            text-align: center; 
        }

        #wrap2 {display: inline-block; text-align: left; width: 58%; background-color: #f2f2f2; padding: 10px}

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
    </nav><br><br><br>
    <div id="wrap">
    <main role="main">
        <div id="wrap2">
        <h1>Level 1 Tutorial: Basic Inventory Database</h1>

        <p>
        The first thing to do when working with databases is deciding on what the database is storing and then creating an appropriate name for the database. In this lesson we will be creating a database that will hold several items, the stock and description of these items, where the items are located, and where the items can be located.</p><p>
        This would be considered a basic Inventory database because it will be tracking the inventory of the stored products.
    </p>
        <hr>
        <h3>Step 1.1: Naming</h3>
        <p>
        Since we know what we will be storing let’s get started creating the database. First pick a name for the database that will appropriately describe what the database is storing.</p>


</p> <p>A few examples: myInventoryDB, companyinventorydb, stockdb, etc. </p>
        <p> Save this name as we will use it in the next step! </p>
    </p><hr>
        <h3>Step 1.2: Creating the database</h3>
        <p>To create the database, you would type the following code below as a query and run it. <b>ENTER YOUR DATABASE NAME IN THE FIELD BELOW:</b></p>
        <form action="level1-output.php" method="post">
        <p><pre>CREATE DATABASE <input type="text" onfocus="this.value=''" name="dbname" value="Enter Database Name..."></pre></p>
        <p><b>Note: All code typed will be run at the end of Level 1.</b></p>
        <hr>
        
        <h3>Step 2.1: The first table</h3>
        <p>Let’s get started on creating a table. The database is an inventory database so the first table we know we need is a table that will hold data about an item in inventory.</p>
        <p>When creating the table, a name for the table is needed as well as at least one column. In this case a name for the table and a name for the column will be needed.</p>
        <p>The table name is a description of the table. Choose a name that will describe your inventory. <b>Note: You will enter this name in Step 2.2 code.</b></p>
        
        <p>A few examples: inventory, items, catalog, etc.</p>
        <p>
        The Column name is a description of what data is going to be held. In this example we will want to store the names of items. Choose a name to describe your items column. <b>Note: You will enter this name in Step 2.2 code.</b></p>

        <p>A few examples: Items, Units, Itemname, etc.<br></p>
        <hr>
        <h3>Step 2.2: Running the Creation Query</h3>
        <p>To create the table, you would type the following as a query and run it. Enter in your Table and Column names from Step 2.1 in the code. </p>
        <p><pre>CREATE TABLE <input type="text" onfocus="this.value=''" name="tablename" value="Enter Table Name...">(<input type="text"  onfocus="this.value=''" name="column1name" value="Enter Column Name..."> VARCHAR(30) NOT NULL)</pre></p>
        <p>VARCHAR stores a variable 30 characters long and not null requires their be a name for every item.</p>
        <p>Again, this will be run for you at the end, but when making more tables and learning about databases, the code and definitions will come in handy.</p>
        <hr>
        <h3>Step 3.1: Adding two new columns</h3>
        
        <p>Now that we have a table started with our main data point let’s begin adding columns that will describe the data point. In the case of this lesson, the columns needed are item description and item stock.</p>
        <p>To add a column we must use the ALTER command as well as the ADD command. The alter command is used in conjunction with what we are altering. In this example it will be the table, therefore the command should look like: <pre>ALTER TABLE {Table Name}</pre>. Following this command we need to add a column so we must choose a column name and use the command: <pre> ADD {Columnname} {Datatype} Not Null</pre></p>
        <p> We will now write this bit of code. Note example column names below and the datatype int which stands for integer (number essentially).</p>
        <p>
        Examples: description, iteminfo, item_description </p>
        <p><pre>
        ALTER TABLE <input type="text" onfocus="this.value=''" name="nameofTableagain" value="Enter Table Name from before again...">
        ADD <input type="text" onfocus="this.value=''" name="column2name" value="Enter the Column Name 'item_description'..."> VARCHAR(30) NOT NULL)
        ADD <input type="text" onfocus="this.value=''" name="column3name" value="Enter the Column Name 'item_stock'..."> int NOT NULL
</pre></p>

        <p>At this point we now have a database, table, and 3 columns that hold the item name, item description, and stock of an item.</p>

        <h3>Step 4.1: Second Table</h3>
        <p>Great! Now we have the start of our first table complete. In this table we have data that should encompass each item as well as how many of that item we have. Now it is time to move on to our second table.</p>
        <p>The second table will hold a list of locations that items could be stored at. In this lesson we will treat the locations as rooms of a building. The table will store data about the rooms using columns for the room numbers/names and an ID for each room that will later be linked to the inventory database as well as a description that may or may not be used.</p>
        <hr>
        <h3>Step 4.2: Creating the Second Table</h3>
        <p>Let’s start by creating the table like we did earlier by creating the locations table with a column for the room number.</p>
        
        <p><pre>CREATE TABLE <input type="text" onfocus="this.value=''" name="table2name" value="Enter the second Table Name or 'Locations'..."> (<input type="text" onfocus="this.value=''" name="roomname" value="Enter the Column Name 'room_number'..."> VARCHAR(30) NOT NULL</pre></p>
        <hr>
        <h3>Step 4.3: Adding a Column to the Second Table</h3>
        <p>Now let’s add a column for the description. In previous create statements we have been using the statement NOT NULL to indicate that the data in that column must have information when adding data to the table. This would mean any new entries to the table must have data to fill each column with the NOT NULL attribute. In the case of this lesson it is not planned to have a description for each room so we will ignore the NOT NULL attribute.</p>
        
        <p><pre>
        ALTER TABLE <input type="text" onfocus="this.value=''" name="tb2name" value="Enter the Locations table name from before...">
        ADD <input type="text" onfocus="this.value=''" name="tb2description" value="Enter the Column Name 'item_description'..."> VARCHAR(30)</pre>
        </p>
        <hr>
        <h3>Step 5.1: Linking Tables</h3>
        
        <p>Now that we have a table with the information for items and a table with the information for the rooms we will begin to link the two tables. To do this we will be creating what is called a primary key for both of the current tables to use as a unique identifier. Each ID will correspond to exactly one item or one room. Using these ID’s we will be creating another table that use both those keys, known as foreign keys, to link the tables together.</p>

        <p>First add a primary key to both tables. You can do this with the same ALTER statement from before. First alter the table to add a new column called ItemID. Next, alter the table and add a primary key to the column ItemID.

        
        <p><pre>
        ALTER <input type="text" onfocus="this.value=''" name="tb3name" value="Enter table one's name from before...">
        ADD <input type="text" onfocus="this.value=''" name="itemID" value="Enter the name of the item ID e.g. 'ItemID'..."> int;
        Alter <input type="text" onfocus="this.value=''" name="tb4name" value="Enter table one's name from before...">
        ADD PRIMARY KEY <input type="text" onfocus="this.value=''" name="itemID2" value="Enter the name of the item ID again from above..."></pre></p>
        <hr>
        <h3>Step 5.2: Adding ID</h3>
        <p>Now we create a RoomID for the locations table.</p>
        
        <p><pre>ALTER <input type="text" onfocus="this.value=''" name="tb5name" value="Enter table two's name...">
        ADD <input type="text" onfocus="this.value=''" name="roomID" value="Enter 'roomID'..."> int;
        Alter <input type="text" onfocus="this.value=''" name="tb6name" value="Enter table two's name...">
        ADD PRIMARY KEY <input type="text" onfocus="this.value=''" name="itemID4" value="Enter the name of the room ID ('roomID')..."></pre></p>
        <hr>
        <h3>Step 6.1: Primary Keys</h3>
        <p>With our Primary key’s created it is time to create the link table that will house a foreign key of both ID columns. In this case we will be creating a table with two foreign keys both from (TABLE 1 NAME) and (TABLE2 NAME). Name the table in a way that describes the link to make it clear what you are linking. (EX: Itemloc, Itemtoroom, itemlink.) Be sure when creating foreign keys to reference the table the key is coming from.</p>
        <p>Now that we know the entire structure, we can create the table in one command.</p>
        <p><pre>CREATE TABLE <input type="text" onfocus="this.value=''" name="linktable" value="Enter a value for table three's name..."> (
        FOREIGN KEY (<input type="text" onfocus="this.value=''" name="itemID7" value="Enter the name of the item ID e.g. 'ItemID'...">) REFERENCES <input type="text" onfocus="this.value=''" name="tabone1" value="Enter table one's name..."> (<input type="text" onfocus="this.value=''" name="itemID7" value="Enter the name of the item ID e.g. 'ItemID'...">)
        FOREIGN KEY (<input type="text" onfocus="this.value=''" name="roomID7" value="Enter the name of the room ID e.g. 'roomID'...">) REFERENCES <input type="text" onfocus="this.value=''" name="tabone10" value="Enter table two's name...">(<input type="text" onfocus="this.value=''" name="itemID10" value="Enter the name of the room ID e.g. 'roomID'...">)
        );</pre></p>
        <p style="text-align: center"> Now you are finished and we can display/run our code. Press the button below: <br><br>

        <input type="submit" value="FINISHED!">
        </p>
         </form>
        <hr>
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