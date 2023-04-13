<?php
include 'connect.php';
// using Question marks
// $stmt = $conn->prepare("INSERT INTO names (firstname, lastname, postcode) VALUES(?,?,?)");

// $stmt->bindValue(1, 'Indira');
// $stmt->bindValue(2, 'Albert');
// $stmt->bindValue(3, 'Harare 252');
// $stmt->execute();

// using placeholders
$stmt = $conn->prepare("UPDATE names set postcode = :postcode WHERE firstname = :firstname");

$stmt->bindValue(':firstname', 'Tanaka');
$stmt->bindValue(':postcode', ' 673856 Sunningdale');
$stmt->execute();

?>