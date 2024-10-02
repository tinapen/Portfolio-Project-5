<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'tinapen');
define('DB_PASS', '052016');
define('DB_NAME', 'myfeedbackapp');

// Create connection
$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";
?>