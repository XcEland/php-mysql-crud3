<?php
include 'connect.php';

echo " using attribute values <br>";
// using attribute value
$stmt = $conn->prepare("SELECT * FROM names WHERE firstname = ?");
$stmt ->bindValue(1, 'Aisha');
$stmt->execute();

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    echo htmlentities($row['firstname'])." ".htmlentities($row['lastname'])." ".htmlentities($row['postcode'])."<br>";
}

echo " using wildcards <br>";
// using wildcards
$stmt = $conn->prepare("SELECT * FROM names WHERE firstname LIKE ?");
$stmt ->bindValue(1, '%cd%');
$stmt->execute();

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    $firstname = htmlentities($row['firstname']);
    $lastname = htmlentities($row['lastname']);
    $postcode = htmlentities($row['postcode']);

    echo $firstname." ".$lastname." ".$postcode."<br>";
}

echo "combination with operators <br>";
// 
$stmt = $conn->prepare("SELECT * FROM names WHERE id = ? && firstname = ?");
$stmt ->bindValue(1, '3');
$stmt ->bindValue(2, 'Charles');
$stmt->execute();

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    $firstname = htmlentities($row['firstname']);
    $lastname = htmlentities($row['lastname']);
    $postcode = htmlentities($row['postcode']);

    echo $firstname." ".$lastname." ".$postcode."<br>";
}

// operators displaying one just record
$stmt = $conn->prepare("SELECT * FROM names WHERE id = ? && firstname LIKE ?");
$stmt ->bindValue(1, '2');
$stmt ->bindValue(2, '%a%');
$stmt->execute();

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    $firstname = htmlentities($row['firstname']);
    $lastname = htmlentities($row['lastname']);
    $postcode = htmlentities($row['postcode']);

    echo $firstname." ".$lastname." ".$postcode."<br>";
}

echo "bind Param with one condition <br>";
// bind parameter with one condition
$stmt = $conn->prepare("SELECT * FROM names WHERE  firstname = ?");
$name = 'Aisha';
$stmt ->bindParam(1, $name);
$stmt->execute();

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    $firstname = htmlentities($row['firstname']);
    $lastname = htmlentities($row['lastname']);
    $postcode = htmlentities($row['postcode']);

    echo $firstname." ".$lastname." ".$postcode."<br>";
}
echo "bind Param with two condition <br>";
// bind parameter with one condition
$stmt = $conn->prepare("SELECT * FROM names WHERE id = ? && firstname = ?");
$id = '2';
$name = 'Aisha';
$stmt ->bindParam(1, $id);
$stmt ->bindParam(2, $name);
$stmt->execute();

while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
    $firstname = htmlentities($row['firstname']);
    $lastname = htmlentities($row['lastname']);
    $postcode = htmlentities($row['postcode']);

    echo $firstname." ".$lastname." ".$postcode."<br>";
}

echo "bind Param array <br>";

// bind parameter with array
$stmt = $conn->prepare("SELECT * FROM names WHERE  firstname = ?");
$names = array('Mcdonal', 'Aisha', 'Charles');

foreach($names as $name){
    $stmt ->bindParam(1, $name);
    $stmt->execute();

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
        $firstname = htmlentities($row['firstname']);
        $lastname = htmlentities($row['lastname']);
        $postcode = htmlentities($row['postcode']);
    
        echo $firstname." ".$lastname." ".$postcode."<br>";
    }


}
