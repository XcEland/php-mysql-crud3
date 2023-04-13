<?php
include 'connect.php';
// using Question marks
// $stmt = $conn->prepare("INSERT INTO names (firstname, lastname, postcode) VALUES(?,?,?)");

// $stmt->bindValue(1, 'Indira');
// $stmt->bindValue(2, 'Albert');
// $stmt->bindValue(3, 'Harare 252');
// $stmt->execute();

// using placeholders
$stmt = $conn->prepare("DELETE FROM names WHERE firstname = :firstname");

$stmt->bindValue(':firstname', 'Mcdonal');
$stmt->execute();

?>