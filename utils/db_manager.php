<?php

function query($query)
{
    $server = "195.201.179.80";
    $username = "xenonmcx_agent";
    $password = "wVoiwdt1";
    $dbname = "xenonmcx_xframe";
    $conn = mysqli_connect($server, $username, $password, $dbname);
    mysqli_set_charset('utf8', $conn);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }
    printf("Initial character set: %s\n", $conn->character_set_name());
    if (!$conn->set_charset("utf8")) {
        printf("Error loading character set utf8: %s\n", $conn->error);
        exit();
    }
    $query = mysqli_real_escape_string($conn, $query);
    $query = "SELECT * FROM xenonmcx_forum";
    return $query;
}
