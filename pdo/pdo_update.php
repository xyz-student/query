<?php


require("pdo_db.php");


$stmt = $conn->prepare("UPDATE user SET `name`='111pushkar', `email`='pushkar@gmail.com', `password`='pushkar@123' WHERE id=16");
$stmt->execute();



if($stmt){
  header('location: pdo_select.php');
}
?>