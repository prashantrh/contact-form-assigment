<?php

require_once ('db_config.php');
/**
 * TODO:
 * 1. Form validation
 * 2. Check isset()
 */
$name = $conn->real_escape_string($_POST['name']);
$phone = $conn->real_escape_string($_POST['phone']);
$email = $conn->real_escape_string($_POST['email']);
$message = $conn->real_escape_string($_POST['message']);
if (isset($_POST['id'])) {
  $sql = "UPDATE  userdata SET name=\"".$name."\", phone='".$phone."', email='".$email."', message='".$message."' WHERE id=".$_POST['id'];
  // echo $sql;
  // die();
} else {
  $sql = "INSERT INTO userdata (name, phone, email, message) VALUES ('$name', '$phone', '$email', '$message')";
}

if ($conn->query($sql) === TRUE) {
  if (isset($_POST['id'])) {
    echo "Record updated successfully";
  } else {
    echo "New record created successfully";
  }
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
//miller"; UPDATE userdata SET name="jaishankar"; --
?>