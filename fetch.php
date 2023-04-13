<?php
include 'connect.php';

$stmt = $conn->query("SELECT * FROM names");
// while ($row = $stmt->fetch(PDO::FETCH_ASSOC))
while ($row = $stmt->fetch()){
    echo htmlentities($row['firstname'])." ".htmlentities($row['lastname'])." ".htmlentities($row['postcode'])."<br>";
}

?>