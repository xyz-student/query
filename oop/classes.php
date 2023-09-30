<?php
// //  Classes are nothing without objects! We can create multiple objects from a class.
 class car{
    public $name , $age;
    //method
    function get_name($name ,$age){
      echo "my name is : ". $this->name = $name . "<br>";
      echo "my age is : ". $this->age = $age . "<br>";
    }
 }


//  objects
 $obj = new car();
 $obj->get_name("deev" , 60);
 $obj->get_name("abc" ,60);
?>


<?php

//   class Abc
//   {
//     public $name, $age;

//     // method 
//     function play($name, $age)
//     {
//       echo $this->name = $name;
//       echo $this->age = $age;
//     }
//   }

//   // objects
// $obj = new Abc();
// $obj->play("saman" , 10);

// $obj1 = new Abc();
// $obj1->play("tisha" , 10);




?>

<?php
// class Fruit {
//   public $name;
//   public $color;

//   function __construct($name ,$color) {
//     $this->name = $name;
//     $this->color = $color;
//   }
//   function get_name( ) {
//      echo " my name is  $this->name  my color is $this->color " ;
//   }
// }

// $apple = new Fruit("Apple" , 'red');
//   $apple->get_name();
?>

<?php

// class abc
// {
//   public $name;

//   function __construct($name)
//   {
//     $this->name = $name;
//   }
//   function __destruct(){
//     echo $this->name;
//   }
// }
// $obj = new abc("saman");
 

?>