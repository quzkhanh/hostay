<?php
$host = "localhost";
$user = "hostay_user";
$pass = "hostay123.";
$db = "hostay_db";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected to database successfully!";
}

$conn->close();
?>
