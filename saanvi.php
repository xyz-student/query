<?php
$con= mysqli_connect("localhost","root","","saanvi");

if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $password = $_POST['password'];
    $image = $_FILES["image"]["name"];
    $fldl = "upload/" . $image;
    move_uploaded_file($_FILES['image']['tmp_name'],$fldl);

    $insert = "INSERT INTO `img_table`(`name`,`password`,`image`) values ('$name','$password','$fldl')";

    $query = mysqli_query($con,$insert);

    if($query){
        header("location:selectimage.php");
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <!-- enctype is important to insert image in any table -->
        name:
        <input type="text" name="name"><br>
        image:
        <input type="file" name="image"><br>
        password:
        <input type="password" name="password"><br>
        <img src="upload/abc.jpg" alt="">
        <input type="submit" name="submit">

    </form>
</body>
</html>