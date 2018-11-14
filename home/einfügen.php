<?php
$servername = "127.0.0.1:50945";
$username = "azure";
$password = "6#vWHD_$";
$dbname = "localdb"; 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username = $_GET['username'];
$email = $_GET['email'];
$pwd = $_GET['password'];

$sql = "INSERT INTO user (name, email, password)
VALUES ('$username', '$email', '$pwd')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 
