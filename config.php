<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
// define('DB_SERVER', 'localhost');
// define('DB_USERNAME', 'u692894633_sis_db');
// define('DB_PASSWORD', 'l95o@WMN6~a');
// define('DB_NAME', 'u692894633_sis_db');

// /* Attempt to connect to MySQL database */
// $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
// // Check connection
// if($link === false){  
//     die("ERROR: Could not connect. " . mysqli_connect_error());
// }

/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'sis_db');

/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
// Check connection
if($link === false){  
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>