<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'phpmyadmin');
define('DB_PASSWORD', 'lcauser-LB1');
define('DB_NAME', 'xenonmcx_xframe');

/* Attempt to connect to MySQL database */
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD);

// echo DB_SERVER . DB_USERNAME . DB_PASSWORD . DB_NAME;
echo "<br>";
// Check connection
if ($conn === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
