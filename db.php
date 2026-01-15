<?php
$conn = new mysqli("localhost", "root", "", "wema_inventory");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
