<?php


require("pdo_db.php");

$stmt = $conn->prepare("DELETE FROM user WHERE id=1");
$stmt->execute();


if($stmt){
  header('location: pdo_select.php');
}
?>