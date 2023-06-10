<?php
include("pdo_db.php");

echo "<table style='border: solid 1px black; width:100%;'>";
echo "<tr><th>id</th><th>name</th><th>email</th><th>password</th></tr>";

class TableRows extends RecursiveIteratorIterator {
  function __construct($it) {
    parent::__construct($it, self::LEAVES_ONLY);
  }

  function current() {
    return "<td style='width:150px;border:1px solid black;'>" . parent::current(). "</td>";
  }

   function beginChildren() {
    echo "<tr align='center'>";
  }

  function endChildren() {
    echo "</tr>" . "\n";
  }
}

// new
  $stmt = $conn->prepare("SELECT id, `name`, `email` , `password` FROM user");
  $stmt->execute();

  // new end

  // set the resulting array to associative
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
    echo $v    ;
  }

echo "</table>";
?>

<a href="pdo_insert.php">Inset</a>
<a href="./pdo_delete.php">Delete</a>
<a href="./pdo_multiinsert.php">Multi Insert</a>
<a href="./pdo_update.php">Update</a>