<?php
include 'connect.php';

$stmt = $conn->query("SELECT * FROM names");
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach($result as $row){
    $firstname = htmlentities($row['firstname']);
    $lastname = htmlentities($row['lastname']);
    $postcode = htmlentities($row['postcode']);
    
    echo htmlentities($row['firstname'])." ".htmlentities($row['lastname'])." ".htmlentities($row['postcode'])."<br>";
}

// foreach($result as $row){
//     $firstname = htmlentities($row['1']);
//     $lastname = htmlentities($row['2']);
//     $postcode = htmlentities($row['3']);
    
//     echo htmlentities($row['firstname'])." ".htmlentities($row['lastname'])." ".htmlentities($row['postcode'])."<br>";
// }

?>