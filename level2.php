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
    <title>EasyDB - Level 2</title>
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

        table,
        th,
        td {
            border: 1px solid black;
            padding: 4px;
            color: black;
        }

        th {
            background-color: #f36d33;
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
                <h1>Level 2 Tutorial: Structure and Constraints</h1>

                <h3>Step 1: Structuring a Database</h3>
                <p>
                    In our last lesson we learned the basics of database creation. We learned how to create a database, create tables, alter tables to add columns, and link tables. In this lesson we will be learning how to structure a database appropriately for our needs and what should be considered before we begin to create our tables.</p>

                <p>The main points in this lesson will focus more in depth around data types, constraints, primary keys, foreign keys, and table structure.</p>


                <h3>Step 2: Datatypes</h3>
                <p>In level one many of the commands that we used for our table and column creation included the line VARCHAR(30). This is an example of a datatype that describes the variable in the column. For example, adding a column with the command: </p>

                <p>
                    <pre>ADD Firstname Varchar(30)</pre>
                </p>

                <p>Firstname is the name of the column and Varchar(30) is the datatype, would create a column called Firstname where a variable with up to 30 characters that could contain letters, numbers, and special characters. The size of a varchar can range from 0 to 65535.</p>

                <p>Datatypes are used to describe what type of data will be stored inside each column and identifies how SQL will interact with the stored data.</p>

                <h3>Step 2.1: More Data Types</h3>

                <p>In mySQL there are three main data types: string, numeric, and date/time.</p>

                <p><b>String Data Types:</b></p>
                <p>
                    <table>
                        <tr>
                            <th style="width:30%">Data type</th>
                            <th>Description</th>
                        </tr>
                        <tr>
                            <td>CHAR(size)</td>
                            <td>A FIXED length string (can contain letters, numbers, and special characters). The
                                <em>size</em> parameter specifies the column length in characters - can be
                                from 0 to 255. Default is 1</td>
                        </tr>
                        <tr>
                            <td>VARCHAR(size)</td>
                            <td>A VARIABLE length string (can contain letters, numbers, and special
                                characters). The <em>size</em> parameter specifies the maximum column
                                length in characters - can be from 0 to 65535</td>
                        </tr>
                        <tr>
                            <td>BINARY(size)</td>
                            <td>Equal to CHAR(), but stores binary byte strings. The <em>size</em>
                                parameter specifies the column length in bytes. Default is 1</td>
                        </tr>
                        <tr>
                            <td>VARBINARY(size)</td>
                            <td>Equal to VARCHAR(), but stores binary byte strings. The <em>size</em>
                                parameter specifies the maximum column length in bytes.</td>
                        </tr>
                        <tr>
                            <td>TINYBLOB</td>
                            <td>For BLOBs (Binary Large OBjects). Max length: 255 bytes</td>
                        </tr>
                        <tr>
                            <td>TINYTEXT</td>
                            <td>Holds a string with a maximum length of 255 characters</td>
                        </tr>
                        <tr>
                            <td>TEXT(size)</td>
                            <td>Holds a string with a maximum length of 65,535 bytes</td>
                        </tr>
                        <tr>
                            <td>BLOB(size)</td>
                            <td>For BLOBs (Binary Large OBjects). Holds up to 65,535 bytes of data</td>
                        </tr>
                        <tr>
                            <td>MEDIUMTEXT</td>
                            <td>Holds a string with a maximum length of 16,777,215 characters</td>
                        </tr>
                        <tr>
                            <td>MEDIUMBLOB</td>
                            <td>For BLOBs (Binary Large OBjects). Holds up to 16,777,215 bytes of data</td>
                        </tr>
                        <tr>
                            <td>LONGTEXT</td>
                            <td>Holds a string with a maximum length of 4,294,967,295 characters</td>
                        </tr>
                        <tr>
                            <td>LONGBLOB</td>
                            <td>For BLOBs (Binary Large OBjects). Holds up to 4,294,967,295 bytes of data</td>
                        </tr>
                        <tr>
                            <td>ENUM(val1, val2, val3, ...)</td>
                            <td>A string object that can have only one value, chosen from a list of possible values. You can list up to 65535 values in an ENUM list. If a value is inserted that is not in the list, a blank value will be inserted.
                                The values are sorted in the order you enter them</td>
                        </tr>
                        <tr>
                            <td>SET(val1, val2, val3, ...)</td>
                            <td>A string object that can have 0 or more values, chosen from a list of
                                possible values. You can list up to 64 values in a SET list</td>
                        </tr>
                    </table>
                </p>

                <p><b>Numeric Data Types:</b></p>

                <p>
                    <table>
                        <tr>
                            <th style="width:30%">Data type</th>
                            <th>Description</th>
                        </tr>
                        <tr>
                            <td>BIT(<em>size</em>)</td>
                            <td>A bit-value type. The number of bits per value is specified in <em>size</em>.
                                The <em>size</em> parameter can hold a value from 1 to 64. The default
                                value for <em>size</em> is 1.</td>
                        </tr>
                        <tr>
                            <td>TINYINT(<em>size</em>)</td>
                            <td>A very small integer. Signed range is from -128 to 127. Unsigned range
                                is from 0 to 255. The <em>size</em> parameter specifies the maximum
                                display width (which is 255)</td>
                        </tr>
                        <tr>
                            <td>BOOL</td>
                            <td>Zero is considered as false, nonzero values are considered as true. </td>
                        </tr>
                        <tr>
                            <td>BOOLEAN</td>
                            <td>Equal to BOOL</td>
                        </tr>
                        <tr>
                            <td>SMALLINT(<em>size</em>)</td>
                            <td>A small integer. Signed range is from -32768 to 32767. Unsigned range
                                is from 0 to 65535. The <em>size</em> parameter specifies the maximum
                                display width (which is 255)</td>
                        </tr>
                        <tr>
                            <td>MEDIUMINT(<em>size</em>)</td>
                            <td>A medium integer. Signed range is from -8388608 to 8388607. Unsigned
                                range is from 0 to 16777215. The <em>size</em> parameter specifies the
                                maximum display width (which is 255)</td>
                        </tr>
                        <tr>
                            <td>INT(<em>size</em>)</td>
                            <td>A medium integer. Signed range is from -2147483648 to 2147483647.
                                Unsigned range is from 0 to 4294967295. The <em>size</em> parameter
                                specifies the maximum display width (which is 255)</td>
                        </tr>
                        <tr>
                            <td>INTEGER(<em>size</em>)</td>
                            <td>Equal to INT(size)</td>
                        </tr>
                        <tr>
                            <td>BIGINT(<em>size</em>)</td>
                            <td>A large integer. Signed range is from -9223372036854775808 to
                                9223372036854775807. Unsigned range is from 0 to 18446744073709551615. The
                                <em>size</em> parameter specifies the maximum display width (which is 255)</td>
                        </tr>
                        <tr>
                            <td>FLOAT(<em>size</em>, <em>d</em>)</td>
                            <td>A floating point number. The total number of digits is specified in
                                <em>size</em>. The number of digits after the decimal point is specified
                                in the <em>d</em> parameter. This syntax is deprecated in MySQL 8.0.17,
                                and it will be removed in future MySQL versions</td>
                        </tr>
                        <tr>
                            <td>FLOAT(<em>p</em>)</td>
                            <td>A floating point number. MySQL uses the <em>p</em> value to determine
                                whether to use FLOAT or DOUBLE for the resulting data type. If <em>p</em>
                                is from 0 to 24, the data type becomes FLOAT(). If <em>p</em> is from 25 to
                                53, the data type becomes DOUBLE()</td>
                        </tr>
                        <tr>
                            <td>DOUBLE(<em>size</em>, <em>d</em>)</td>
                            <td>A normal-size floating point number. The total number of digits is specified in
                                <em>size</em>. The number of digits after the decimal point is specified
                                in the <em>d</em> parameter</td>
                        </tr>
                        <tr>
                            <td>DOUBLE PRECISION(<em>size</em>, <em>d</em>)</td>
                            <td>&nbsp;</td>
                        </tr>
                        <tr>
                            <td>DECIMAL(<em>size</em>, <em>d</em>)</td>
                            <td>An exact fixed-point number. The total number of digits is specified in
                                <em>size</em>. The number of digits after the decimal point is specified
                                in the <em>d</em> parameter. The maximum number for <em>size</em> is 65.
                                The maximum number for <em>d</em> is 30. The default value for <em>size</em>
                                is 10. The default value for <em>d</em> is 0.</td>
                        </tr>
                        <tr>
                            <td>DEC(<em>size</em>, <em>d</em>)</td>
                            <td>Equal to DECIMAL(size,d)</td>
                        </tr>
                    </table>
                </p>

                <p><b>Date and Time Data Types:</b></p>
                <p>
                    <table>
                        <tr>
                            <th style="width:30%">Data type</th>
                            <th>Description</th>
                        </tr>
                        <tr>
                            <td>DATE</td>
                            <td>A date. Format: YYYY-MM-DD. The supported range is from '1000-01-01' to '9999-12-31'</td>
                        </tr>
                        <tr>
                            <td>DATETIME(<em>fsp</em>)</td>
                            <td>A date and time combination. Format: YYYY-MM-DD hh:mm:ss. The supported range is from '1000-01-01 00:00:00' to '9999-12-31 23:59:59'.
                                Adding DEFAULT and ON UPDATE in the column definition to get automatic
                                initialization and updating to the current date and time</td>
                        </tr>
                        <tr>
                            <td>TIMESTAMP(<em>fsp</em>)</td>
                            <td>A timestamp. TIMESTAMP values are stored as the number of seconds since the Unix epoch ('1970-01-01 00:00:00' UTC). Format: YYYY-MM-DD
                                hh:mm:ss. The supported range is from '1970-01-01 00:00:01' UTC to '2038-01-09 03:14:07' UTC.
                                Automatic initialization and updating to the current date and time can be
                                specified using DEFAULT CURRENT_TIMESTAMP and ON UPDATE CURRENT_TIMESTAMP
                                in the column definition</td>
                        </tr>
                        <tr>
                            <td>TIME(<em>fsp</em>)</td>
                            <td>A time. Format: hh:mm:ss. The supported range is from '-838:59:59' to '838:59:59'</td>
                        </tr>
                        <tr>
                            <td>YEAR</td>
                            <td>A year in four-digit format. Values allowed in four-digit format: 1901 to 2155, and 0000.<br>
                                MySQL 8.0 does not support year in two-digit format.</td>
                        </tr>
                    </table>
                </p>

                <h3>Step 3: Constraints</h3>

                <p>Along with the datatype of a field there is also the opportunity to provide a constraint. In the previous lesson there were times we created columns with the constraint <b>NOT NULL</b>. Such as:</p>

                <p>
                    <pre>ADD item_description VARCHAR(30) NOT NULL)</pre>
                </p>

                <p>Where we provided both a datatype varchar(30) and the constraint <b>NOT NULL</b>. A constraint such as the one used here are used to describe a requirement on the data in a column or table. In the case of <b>NOT NULL</b> the constraint on the column is that every entry may not have a <b>NULL</b> value.</p>

                <p>The following are commonly used constraints in SQL:</p>

                <p>
                    <table>
                        <tr>
                            <th style="width:30%">Constraints</th>
                            <th>Description</th>
                        </tr>
                        <tr>
                            <td>NOT NULL</td>
                            <td>Ensures that a column cannot have a NULL value</td>
                        </tr>
                        <tr>
                            <td>UNIQUE</td>
                            <td>Ensures that all values in a column are different</td>
                        </tr>
                        <tr>
                            <td>PRIMARY KEY</td>
                            <td>A combination of a NOT NULL and UNIQUE. Uniquely identifies each row in a table</td>
                        </tr>
                        <tr>
                            <td>FOREIGN KEY</td>
                            <td>Uniquely identifies a row/record in another table</td>
                        </tr>
                        <tr>
                            <td>CHECK</td>
                            <td>Ensures that all values in a column satisfies a specific condition</td>
                        </tr>
                        <tr>
                            <td>DEFAULT</td>
                            <td>Sets a default value for a column when no value is specified</td>
                        </tr>
                    </table>
                </p>

                <h3>Step 4: Constraint Usage</h3>

                <p>By default columns can hold Null values. This means that if you were to insert data into a table and leave an entry for a column blank, that value would be updated with NULL. NULL is the value that implies no data was entered. This can be utilized when entering data where there are optional fields.</p>

                <p>
                    <pre>CREATE TABLE People(
FirstName Varchar(30) NOT NULL,
LastName Varchar(30) NOT NULL,
NickName Varchar(30) 
)
</pre>
                </p>

                <p>In the above example the table People is collecting information about a persons FirstName, LastName, and NickName. FirstName and LastName have added constraints NOT NULL while NickName does not. This is because NickName is an optional field when data is collected. If a NickName is not collected then the field will be left blank and be assigned a value of NULL.</p>

                <h3>Step 4.1: Unique Constraint</h3>

                <p>The unique constraint is used to identify columns that must have unique entries. Both the PRIMARY KEY and UNIQUE constraints define uniqueness on a column, but a PRIMARY KEY constraint can only be used once per table while a UNIQUE constraint can be used many.</p>

                <p>
                    <pre>CREATE TABLE People(
ID int NOT NULL UNIQUE,
FirstName Varchar(30) NOT NULL,
LastName Varchar(30) NOT NULL,
)
</pre>
                </p>

                <p>
                    In the above example the table people has the field ID that is used to identify people that may have the same name. To do this, the field ID must be NOT NULL and UNIQUE so there are no duplicates. This ensures that two people with the same name such as “John Miller” are identifiable.
                </p>

                <p>
                    <pre>CREATE TABLE People(
ID int NOT NULL,
FirstName Varchar(30) NOT NULL,
LastName Varchar(30) NOT NULL,
CONSTRAINT UC_People UNIQUE (ID, LastName)
)
</pre>
                </p>

                <p>In the above example a UNIQUE constraint has been added by creating a constraint called UC_People that defines that in the table ID and LastName must be UNIQUE.</p>

                <p>A benefit to naming this constraint is that you may choose to drop the constraint with the command DROP CONSTRAINT UC_People.</p>

                <h3>Step 4.2: Keys and Constraints</h3>

                <p>
                    In the last lesson we used both PRIMARY KEY and FORIEQN KEY as a way of identifying tables and linking them. This is because the PRIMARY KEY identifies a column as both UNIQUE and NOT NULL. This means every value exists and is different.
                </p>

                <p>
                    Likewise, FOREIGN KEY references another tables PRIMARY KEY as a way to link tables information. Another benefit to the FOREIGN KEY constraint is that it prevents actions that would destroy the link between the two tables as well as preventing invalid data entry into the foreign key column.
                </p>

                <h3>Step 4.3: CHECK Constraint</h3>

                <p>The CHECK constraint is used to limit the values that can be entered into a column. When used on a single column the data in that column is limited. When defined on a table the CHECK constraint can limit values in a column based on another value in that row.</p>

                <p>
                    <pre>CREATE TABLE People(
FirstName Varchar(30) NOT NULL,
LastName Varchar(30) NOT NULL,
Age int CHECK (Age >=18) 
)
</pre>
                </p>

                <p>In the above table the CHECK constraint guarantees entered data has an age of 18 or older.</p>

                <h3>Step 4.4: DEFAULT Constraint</h3>

                <p>The DEFAULT constraint is used to set a default value if no value is provided.</p>

                <p>
                    <pre>CREATE TABLE People(
FirstName Varchar(30) NOT NULL,
LastName Varchar(30) NOT NULL,
City varchar(30) DEFAULT ‘Cincinnati’
)
</pre>
                </p>

                <p>In the above example if the optional field City is not provided the value will be set as Cincinnati.</p>

                <h3>Step 5: Structure and Normalization</h3>

                <p>The structure of a database is an important step in database creation and must be well thought out to ensure data continuity. It is important so that data is not replicated and lost within a poorly maintained database structure. In this portion we will be looking at Relational databases and Data normalization.</p>

                <h3>Step 5.1: Data Normalization</h3>

                <p>There are several established levels of Data Normalization ranging from the first normal form to the sixth normal form. Each level of normal form builds on the level before it. This means that if the table meets the fourth normal form then it also meets the requirements for the third normal form. In most cases, best practice is to achieve the fifth normal form.</p>

                <h3>Step 5.1.1: First Normal Form</h3>

                <p>The first normal form states “A relation is in first normal form if and only if the domain of each attribute contains only atomic indivisible values, and each attribute contains only a single value from that domain.” In general, this means two rules must be met:</p>

                <p>
                    <ol type="1">
                        <li>Each column must hold one value.</li>
                        <li>Column types cannot be repeated.</li>
                    </ol>
                </p>

                <p>
                    <img src="img/1NormalTable.png" />
                </p>

                <p>
                    In the above table the field PhoneNumber has multiple values entered so it does not meet the criteria for First normal form.
                </p>

                <p>
                    <img src="img/1NormalTable2.png" />
                </p>

                <p>
                    The immediate solution many come to is to separate the columns like the above table. However, this does not satisfy that columns must not be repeated. Instead, a table to house phone numbers should be created.
                </p>

                <p>
                    <img src="img/1NormalTable3.png" />
                </p>

                <p>
                    The above image shows two tables that are used to house both Information about a customer as well as phone numbers without repeating columns or having multiple data entries in one column. This now achieves the first normal form.
                </p>

                <h3>Step 5.1.2: Second Normal Form</h3>

                <p>The second normal form states “A non-prime attribute of a relation is an attribute that is not a part of any candidate key of the relation.” In general, this means that data in a table must relate to the prime attribute in some way.</p>

                <p>
                    <img src="img/2NormalTable.png" />
                </p>

                <p>In the above table Information about Car models is being stored. However, information about Manufacturer is also being stored so the table is storing two “Prime” attributes and does not meet Second normal form.</p>

                <p>
                    <img src="img/2NormalTable2.png" />
                </p>

                <p>The above change to store Manufacturer information separately meets the requirement of second normal form.</p>

                <h3>Step 5.1.3: Third Normal Form</h3>

                <p>The third normal form states attributes must be functionally dependent on the primary key. Like the second normal form data must be separated but also dependent on the primary key. </p>

                <p>
                    <img src="img/3NormalTable.png" />
                </p>

                <p>The above table does not meet the third normal form because Winners date of birth is dependent on Winner.</p>

                <p>
                    <img src="img/3NormalTable2.png" />
                </p>

                <p>This can be solved by creating a second table where Winner’s date of birth is dependent on Winner.</p>

                <h3>Step 5.1.4: Fourth Normal Form</h3>

                <p>The fourth normal form states for every non-trivial multivalued dependencies there must be a super key. In general, this means if you have a description of a primary key that included two separate values that can be repeated, the sperate values must be separated using the super key.</p>

                <p>
                    <img src="img/4NormalTable.png" />
                </p>

                <p>The above table does not meet the fourth normal form because both Pizza Variety and Delivery Area are independent of each other, yet both are dependent on Restaurant. </p>

                <p>
                    <img src="img/4NormalTable2.png" />
                </p>

                <p>To fix this, separate both Pizza Variety and Delivery area into two tables with the super key Restaurant.</p>

                <h3>Step 5.1.5: Fifth Normal Form</h3>

                <p>The fifth normal form states every non-trivial join dependency in a table is implied by the candidate key. Very rarely will a fourth normal form table does not meet the requirements of the fifth normal form. In any case, the times that a fifth normal form is not met after achieving the fourth normal form is usually because of some attribute that cannot be consolidated into a table and must be managed by a user to ensure logical consistency. </p>

                <h3>Step 5.2: Relational Databases</h3>

                <p>There are three types of Relationships that can be seen in databases. One to One, One to Many, and Many to Many relationships. These relationships represent the possible relations between two tables in a database and dictate how your database must be formatted to comply with data normalization.</p>

                <p>The types of relations are self-explanatory. When two tables are related to each other they are related by one value to one value, one value to many values, or many values to many values.
                </p>

                <h3>Step 5.2.1: One-to-One Relationships</h3>

                <p>
                    A one to one relationship would appear as the image below. A person has a one to one relationship with their passport ID:
                </p>

                <p>
                    <img src="img/1to1Table.png" />
                </p>

                <h3>Step 5.2.2: One-to-Many Relationships</h3>

                <p>A one to many relationships would appear as the image below. For every Customer in the Customers table, they can have many instances in the Phone number table.</p>

                <p>
                    <img src="img/1toManyTable.png" />
                </p>

                <h3>Step 5.2.3: Many-to-Many Relationships</h3>

                <p>In a case where there could be a many to many relationships. For example, a book can have many authors, and authors can write many books. This does not work well in a database setting so in those cases it is best to just a junction table that links the two tables in a one to many relationships.</p>

                <p>
                    <img width="40%" src="img/ManytoManyTable.jpg" />
                </p>

                <form action="level2-output.php" method="post">
                    <p style="text-align: center"> Now you are finished and we can display/run our code. Press the button below: <br><br>

                        <input type="submit" value="FINISHED!">
                    </p>
                </form>


            </div>
        </main>
    </div>

    <footer style="text-align: center" class="container">
        <p>&copy; EasyDB 2019-2020</p>
    </footer>

    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <!-- Bootstrap Js CDN -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>

</html>