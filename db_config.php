<?php

/*
 * All database connection variables
 */

define('DB_USER', "sachin"); // db user
define('DB_PASSWORD', "Testing_12!"); // db password (mention your db password here)
define('DB_DATABASE', "spandan"); // database name
define('DB_SERVER', "204.11.58.166"); // db server

$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASSWORD,DB_DATABASE) or die('Unable to Connect');
?>
