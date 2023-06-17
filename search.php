<?php

$searchText = trim($_GET["searchText"]);

$trimmedStr = trim($searchText);

if (empty($trimmedStr)) {
    header("location: index.php");
} else {
    header("location: https://www.google.co.il/search?q=$searchText");
}
