<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'hks' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'hks');
define('DB_PASSWORD', 'donut');
define('DB_NAME', 'cars');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>