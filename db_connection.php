<?php
$host = 'localhost';
$db = 'user_information';
$user = 'root';  
$password = '';  

$conn = new mysqli($host, $user, $password, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
