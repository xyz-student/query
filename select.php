 
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>
  
    <?php
    // include "db.php";
    // $select = "SELECT * from `smriti_table`  ";
    // $qu = mysqli_query($con, $select);
    // $fetch = mysqli_fetch_array($qu);    
    // echo "<h2 class='text-success'>". "Welcome ". $fetch['name'] . "</h2>";
  
  
    ?>
    <table class="table table-bordered text-capitalize table-hover table-light w-75 m-auto">
        <tr>
            <td>s no</td>
            <td>image</td>
            <td>name</td>
            <td>password</td>            
        </tr>
        <?php
        include "db.php";
        $select = "SELECT * from `smriti_table`";
        $qu = mysqli_query($con, $select);
        $s_no = 1;
        while ($row = mysqli_fetch_array($qu)) {

        ?>
            <tr>
                <td><?php echo $s_no ?></td>
                <td><img src="<?php echo $row['image'] ?>" height="100px" width="100px" alt=""></td>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['password'] ?></td>               
            </tr>
        <?php $s_no++;
        } ?>
    </table>

</body>

</html>





<!--   <textarea class="form-control" name="remarks" rows="3" placeholder="Enter ..."> ?php echo htmlspecialchars($remarks); ?></textarea> -->