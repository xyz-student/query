<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border cellpadding="20px">
        <tr>
            <td>cat name</td>
            <td>cat price</td>
            <td>cat description</td>
            <td>pro date</td>
            <td>pro name</td>
        </tr>
        <?php
        $con = mysqli_connect("localhost", "root", "", "joins");
        $sel = "SELECT cat.cat_id, cat.cat_name, cat.cat_price,cat.cat_des, pro.pro_date, 
        pro.pro_name
        FROM pro
        INNER JOIN cat ON pro.pro_id=cat.cat_id";
        $qu = mysqli_query($con,$sel);
        while($row = mysqli_fetch_array($qu)){

      
        ?>
        <tr>
            <td><?php echo $row['cat_name']  ?></td>
            <td><?php echo $row['cat_price']  ?></td>
            <td><?php echo $row['cat_des']  ?></td>
            <td><?php echo $row['pro_date']  ?></td>
            <td><?php echo $row['pro_name']  ?></td>
        </tr>
        <?php   }?>
    </table>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table border cellpadding="20px">
        <tr>
            <td>cat name</td>
            <td>cat price</td>
            <td>cat description</td>
            <td>pro date</td>
            <td>pro name</td>
        </tr>
        <?php
        $con = mysqli_connect("localhost", "root", "", "joins");
        $sel = "SELECT cat.cat_id, cat.cat_name, cat.cat_price,cat.cat_des, pro.pro_date, 
        pro.pro_name
        FROM pro
        INNER JOIN cat ON pro.pro_id=cat.cat_id";
        $qu = mysqli_query($con,$sel);
        while($row = mysqli_fetch_array($qu)){

      
        ?>
        <tr>
            <td><?php echo $row['cat_name']  ?></td>
            <td><?php echo $row['cat_price']  ?></td>
            <td><?php echo $row['cat_des']  ?></td>
            <td><?php echo $row['pro_date']  ?></td>
            <td><?php echo $row['pro_name']  ?></td>
        </tr>
        <?php   }?>
    </table>
</body>

</html>