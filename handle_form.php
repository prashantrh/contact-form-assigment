<?php

require_once ('db_config.php');
/**
 * TODO:
 * 1. Form validation
 * 2. Check isset()
 */
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$message = $_POST['message'];
$sql = "INSERT INTO userdata (name, phone, email, message)
VALUES ('$name', '$phone', '$email', '$message')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>