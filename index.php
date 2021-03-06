<?php

require "auth.php";

include "utils/template.php";

if (isset($_GET)) {
    $topic_ID = $_GET['ID'];
    template($topic_ID);
} else {
    // readfile("/pages/main.html");
}

readfile("/pages/main.html");
