<?php
$host = "localhost";
$dbusername = "DB_USERNAME";
$dbpassword = "DB_PASSWORD";
$dbname = "DB_NAME";

// Create connection
$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else {
  // echo "Connected successfully";
}

?>
