<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "guestbook_2"; 

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>