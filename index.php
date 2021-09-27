<?php

$key = "failed";
if (isset($_GET['key'])) {
    $key = $_GET['key'];
}

if ($key === "failed") {
    echo "failed";
    die();
}

echo "Your key is:".$key;
die();

?>