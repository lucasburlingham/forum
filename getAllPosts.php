<?php
require_once "config.php";
$result = mysqli_query($conn, "SELECT * FROM `content` ORDER BY `topic_DATE` DESC;");

while ($row = mysqli_fetch_array($result)) {
    echo $row['topic_NAME'];
    echo $row['topic_DATE'];
    echo $row['topic_CONTENT'];
    echo $row['topic_REP'];
    echo $row['topic_CREATORID'];
}
