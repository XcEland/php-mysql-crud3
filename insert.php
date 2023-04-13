<?php
include 'connect.php';
// using Question marks
// $stmt = $conn->prepare("INSERT INTO names (firstname, lastname, postcode) VALUES(?,?,?)");

// $stmt->bindValue(1, 'Indira');
// $stmt->bindValue(2, 'Albert');
// $stmt->bindValue(3, 'Harare 252');
// $stmt->execute();

// using placeholders
$stmt = $conn->prepare("INSERT INTO names (firstname, lastname, postcode) VALUES(:firstname, :lastname, :postcode)");

$stmt->bindValue(':firstname', 'Tanaka');
$stmt->bindValue(':lastname', 'Mpofu');
$stmt->bindValue(':postcode', 'Sunningdale 252');
$stmt->execute();

?>