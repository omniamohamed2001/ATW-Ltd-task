<?php
$conn = new mysqli('localhost', 'web_user', 'StrongPassword123', 'web_db');
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully. Your IP: " . $_SERVER['REMOTE_ADDR'] . ". Current time: " . date("Y-m-d H:i:s");
?>

