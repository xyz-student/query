<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="" method="post">
        <input type="text" name="str">
        <input type="submit" name="submit">
    </form>
    <?php
    $con = mysqli_connect("localhost","root","","search");

    if (isset($_POST['submit'])) {
        $str = mysqli_real_escape_string($con, $_POST['str']);
        $sql = "SELECT * FROM `pro` where pro_name  like '%$str%'";
        $q = mysqli_query($con, $sql);
        while($row = mysqli_fetch_array($q)){

       ?>
       <a href="pro.php?id=<?php echo $row['id']?>"><?php echo $row['pro_name'] ?></a>
       <?php
        }
    }
       ?>
    
</body>

</html>