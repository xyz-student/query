<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $con = mysqli_connect("localhost","root","","search");
    $id = $_GET['id'];
    $sel = "SELECT * FROM `pro` WHERE `id`='$id'";
    $q = mysqli_query($con, $sql);
    while($row = mysqli_fetch_array($q)){

   ?>
   <a href="pro.php?id=<?php echo $row['id']?>"><?php echo $row['pro_name'] ?></a>
   <?php
    }
    ?>
</body>

</html>