<?php

require_once ('db_config.php');

  
  if(isset($_GET['action'])) {
    $action = $_GET['action'];
  } else {
    die("Please enter Action");
  }

  if ($action === "delete") {
  $sql = "DROP TABLE userdata";
  $conn->query($sql);
  echo "Deleted userdata Table";

  } else if ($action === "create") {
  // sql to create table
    $sql = "CREATE TABLE IF NOT EXISTS userdata (
            id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(30) NOT NULL,
            phone VARCHAR(30) NOT NULL,
            email VARCHAR(50) NOT NULL,
            message VARCHAR(300) NOT NULL
          )";

    if ($conn->query($sql) === TRUE) {
      echo "Userdata Table created successfully";
    } else {
      echo "Error creating table: " . $conn->error;
    }
  } else {
    echo "Please enter valid Action";
  }
?>

<!-- http://localhost/assignment/migration.php?action=delete -->