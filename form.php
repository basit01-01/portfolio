<?php
// Database credentials
$host = 'localhost'; // or your host name
$dbname = 'portfolio';
$username = 'root';
$password = '';

// Create connection
$mysqli = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Insert username into the database
$firstname = $_POST['firstName'];
$lastname =$_POST['lastName'];
$email =$_POST['email'];
$phoneno =$_POST['number'];
$message = $_POST['message'];



$sql = "INSERT INTO portfolio  VALUES ('$firstname','$lastname','$email','$phoneno','$message')";

if ($mysqli->query($sql) === TRUE) {
    echo "Thanks for Your Valuable Message..";
} else {
    echo "Error: " . $sql . "<br>" . $mysqli->error;
}

$mysqli->close();
?>
