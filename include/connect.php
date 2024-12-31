<?php
$servername = "localhost";
$username = "shatabdi";
$password = "1404023s";
$dbname = "shatabdi_home";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>