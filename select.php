<?php
// session_start();

// if (!isset($_SESSION["password"])) {
//     header("Location:index.php");
// }
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
    <h1>welcome </h1>
     <table border>
         <tr>
             <td>s no</td>
             <td>image</td>
             <td>name</td>
             <td>password</td>
             <td>update</td>
             
         </tr>
         <?php
            include "db.php";
            $select = "SELECT * from `smriti_table`";
            $qu =mysqli_query($con,$select);
            while($row = mysqli_fetch_array($qu)){
          
            ?>
         <tr>
             <td><?php echo $row['id'] ?></td>
             <td><img src="<?php echo $row['image'] ?>" height="300px" width="300px" alt=""></td>
             <td><?php echo $row['name'] ?></td>
             <td><?php echo $row['password'] ?></td>
             <td><a href="update.php?id=<?php echo $row['id'];  ?>">
             update</a></td>
             <td><a href="delete.php?id=<?php echo $row['id'];  ?>">
             delete</a></td>
              
         </tr>
         <?php  } ?>
     </table>
 
 </body>

 </html>