<?php
// Parent class
// we can not create any object with abstract class
abstract class Car {
  public $name;
  public function __construct($name) {
    $this->name = $name;
  }
  abstract public function intro()  ;
}

// Child classes
class Audi extends Car {
  public function intro()   {
    return "Choose German quality! I'm an $this->name!";
  }
}

class Volvo extends Car {
  public function intro()    {
    return "Proud to be Swedish! I'm a $this->name!";
  }
}

 

// Create objects from the child classes
$audi = new audi("Audi");
echo $audi->intro();
echo "<br>";

$volvo = new volvo("Volvo");
echo $volvo->intro();
echo "<br>";

 
?>