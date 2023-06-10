<?php
// //  Classes are nothing without objects! We can create multiple objects from a class.
//  class car{
//     public $name , $age;
//     //method
//     function get_name($name ,$age){
//       echo "my name is : ". $this->name = $name . "<br>";
//       echo "my age is : ". $this->age = $age . "<br>";
//     }
//  }


// //  objects
//  $obj = new car();
//  $obj->get_name("deev" , 60);
//  $obj->get_name("abc" ,60);
?>

 

<?php
class Fruit {
  public $name;
  public $color;

  function __construct($name) {
    $this->name = $name;
  }
  function __destruct()
  {
    echo $this->name;
  } 
}

$apple = new Fruit("Apple");
 


 
 

 
 

?>