<?php
$host = "localhost";
$userName = "paigedah_mailtester";
$password = "TheMailTester1";
$dbName = "paigedah_mailtest";
 
// Create database connection
$conn = new mysqli($host, $userName, $password, $dbName);
 
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
?>