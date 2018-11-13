<?php
$servername = "localhost";
$username = "connection";
$password = "1234";
$dbname = "localdb"; 

echo 'hallo';
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$name = $_GET['name'];
$ingredience = $_GET['ing'];
$preperation = $_GET['pre'];
$preperationt = $_GET['pret'];
$backingt = $_GET['backt'];
$coolingt = $_GET['coolt'];
$ofensettings = $_GET['of'];

$sql = "INSERT INTO user (Name, ingredience, prepartion, preperation_time, backing_time, cooling_time, ofensetting)
VALUES ('$name', '$ingredience', '$preperation', '$preperationt', '$backingt', '$coolingt', '$ofensettings')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 