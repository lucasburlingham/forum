<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'phpmyadmin');
define('DB_PASSWORD', 'lcauser-LB1');
define('DB_NAME', 'xenonmcx_xframe');

error_reporting(E_ALL);
ini_set('display_errors', 1);

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

/* Attempt to connect to MySQL database */
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
if ($conn === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
