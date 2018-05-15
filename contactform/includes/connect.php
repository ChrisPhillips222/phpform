<?php
// define variables and set to empty values


$nameErr = "";
$emailErr = ""; 
$subjError = "";
$firstName = "";
$lastName = "";
$email = "";
$subject = ""; 
$comment = "";

//set database log in information

$host = "localhost";
$userName = "janicebr_group1admin";
$password = "cas285group1";
$dbName = "janicebr_cas285group1";
 
// Create database connection
$conn = new mysqli($host, $userName, $password, $dbName);
 
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
?>