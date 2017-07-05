<?php
$error='Could not connect';
$host = 'localhost';
$user = 'u105941622_ncore';
$pass = 'sb0032989';
$db = 'u105941622_ncore';
global $id;

// Create connection
$conn = new mysqli($host, $user, $pass, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$conn->query("set character_set_results='utf8'");
?>
