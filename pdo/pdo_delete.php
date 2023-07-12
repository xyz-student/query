<?php


require("pdo_db.php");

$stmt = $conn->prepare("DELETE FROM user WHERE id=4");
$stmt->execute();


if($stmt){
  header('location: pdo_select.php');
}
?>