<?php
define('DB_SERVER', '195.201.179.80:2222');
define('DB_USERNAME', 'xenonmcx_agent');
// define('DB_USERNAME', 'test');
// define('DB_PASSWORD', 'test');
define('DB_PASSWORD', 'wVoiwdt1');
define('DB_NAME', 'xenonmcx_xframe');

/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

echo DB_SERVER . DB_USERNAME . DB_PASSWORD . DB_NAME;
echo "<br>";
// Check connection
if ($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
