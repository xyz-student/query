<?php
// class Fruit {
//   public $name;
//   public $color;
//   public function __construct($name, $color) {
//     $this->name = $name;
//     $this->color = $color;
//   }
//   public function __destruct() {
//     echo "The fruit is {$this->name} and the color is {$this->color}.";
//   }
// }

// // Strawberry is inherited from Fruit
// class Strawberry extends Fruit {
//   public function message() {
//     echo "Am I a fruit or a berry? " ;
//   }
// }
// $strawberry = new Strawberry("Strawberry", "red");
// $strawberry->message();


class A
{
  public $name;

  function __construct($name)
  {
    $this->name = $name;
  }

  public function __destruct()
  {
    echo "My Name is {$this->name}  ";
  }
}

class B extends A
{
  public function abc()
  {
    echo "this is my php";
  }
}

$o = new B('saman');
$o->abc();