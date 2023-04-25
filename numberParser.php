<?php

include 'database.php';
$query = "SELECT name, email, phone, city, language, sList, timeControl, dateControl FROM crud";

$result_set = $conn->query($query);

$name = 0;
foreach ($result_set as $row) {
    if (strlen($row['name']) > strlen($name)) {
        $name = $row['name']; 
    }
}
$nameLength = strlen($name);
$nameLength = $nameLength * 11;

$phone = 0;
foreach ($result_set as $row) {
    if (strlen($row['phone']) > strlen($phone)) {
        $phone = $row['phone']; 
    }
}
$phoneLength = strlen($phone);
$phoneLength = $phoneLength * 11;

$city = 0;
foreach ($result_set as $row) {
    if (strlen($row['city']) > strlen($city)) {
        $name = $row['city']; 
    }
}
$cityLength = strlen($city);
$cityLength = $cityLength * 11;

$language = 0;
foreach ($result_set as $row) {
    if (strlen($row['language']) > strlen($language)) {
        $name = $row['language']; 
    }
}
$languageLength = strlen($language);
$languageLength = $languageLength * 11;

$sList = 0;
foreach ($result_set as $row) {
    if (strlen($row['sList']) > strlen($sList)) {
        $name = $row['sList']; 
    }
}
$sListLength = strlen($sList);
$sListLength = $sListLength * 11;

$dateControl = 0;
foreach ($result_set as $row) {
    if (strlen($row['dateControl']) > strlen($dateControl)) {
        $name = $row['dateControl']; 
    }
}
$dateControlLength = strlen($dateControl);
$dateControlLength = $dateControlLength * 11;

$timeControl = 0;
foreach ($result_set as $row) {
    if (strlen($row['timeControl']) > strlen($timeControl)) {
        $name = $row['timeControl']; 
    }
}
$timeControlLength = strlen($timeControl);
$timeControlLength = $timeControlLength * 11;
?>