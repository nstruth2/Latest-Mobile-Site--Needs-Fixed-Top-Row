<?php

include 'database.php';
$query = "SELECT name, email, phone, city, language, sList, timeControl, dateControl FROM crud";

$result_set = $conn->query($query);
$email = 0;
foreach ($result_set as $row) {
    if (strlen($row['email']) > strlen($email)) {
        $name = $row['email']; 
    }
}
$eMailLength = strlen($email);
$eMailLength = $eMailLength * 11;
?>