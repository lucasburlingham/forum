<?php
require_once "config.php";
$result = mysqli_query($conn, "SELECT * FROM `content` ORDER BY `topic_DATE` DESC;");

while ($row = mysqli_fetch_array($result)) {
    echo $row['topic_NAME'];
    echo "<br>";
    echo $row['topic_DATE'];
    echo "<br>";
    echo $row['topic_CONTENT'];
    echo "<br>";
    echo $row['topic_REP'];
    echo "<br>";
    echo $row['topic_CREATORID'];
    echo "<br>";
}
