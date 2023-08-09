<?php
require_once("pdo_db.php");

$stmt = $conn->prepare("INSERT INTO user (`name`,`email`,`password`) VALUES ('kapil', 'kapil@gmail.com', 'kishore')");
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