<?php
// Database connection
// Database connection
$host = 'localhost';
$db = 'job_portal';  // Your database name
$user = 'root';      // Your MySQL username
$pass = '';          // Your MySQL password

$conn = new mysqli($host, $user, $pass, $db);

//check connection
if ($conn -> connect_error){
    die("Connection failed: " . $conn->connect_error);
}
?>