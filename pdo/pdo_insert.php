<?php
require_once("pdo_db.php");

$stmt = $conn->prepare("INSERT INTO user (`name`,`email`,`password`) VALUES ('subham', 'subham@gmail.com', 'subham@123')");
$stmt->execute();

// if($stmt){
//     echo 'data sent';
// }else{
//     echo 'data does not sent';

// }

if($stmt){
    header('location: pdo_select.php');
  }
?>