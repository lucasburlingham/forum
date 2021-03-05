<?php

function query($query)
{
    $query = mysqli_real_escape_string($query);
    $query = "SELECT * FROM xenonmcx_forum WHERE topic_ID = $query";
}
