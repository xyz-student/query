<?php

require("pdo_db.php");


  // begin the transaction
  $conn->beginTransaction();
  // our SQL statements
  $conn->exec("INSERT INTO user (`name`, `email`, `password`)
  VALUES ('John', 'Doe', 'john@example.com')");
  $conn->exec("INSERT INTO user (`name`, `email`, `password`)
  VALUES ('Mary', 'Moe', 'mary@example.com')");
  $conn->exec("INSERT INTO user (`name`, `email`, `password`)
  VALUES ('Julie', 'Dooley', 'julie@example.com')");

  // commit the transaction
  $conn->commit();



if($conn){
  header('location: pdo_select.php');
}
?>