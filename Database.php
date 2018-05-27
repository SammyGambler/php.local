<?php
//Mysqli OOP
$host = "localhost";
$username = "root";
$password = "";
$dbname = "tests";
$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_error) {
    echo "No OK";
}
$sql = "Select * From users";
$results = $conn->query($sql);

//PDO
try {
    $con = new PDO($host, $username,$dbname);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = 'Select * From users';
    $con->exec($sql);
    var_dump($con->prepare($sql));

} catch (PDOException $exception) {
    echo $sql . "<br>" . $exception->getMessage();
}
$con = null;