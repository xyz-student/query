<?php
// Constants cannot be changed once it is declared.
// class Goodbye {
//   const print_work = "hi im php";
// }

// echo Goodbye::print_work;
?>


<!-- WITH OBJECTS -->
<?php
class Goodbye {
  const LEAVING_MESSAGE = "CLASS OBJECTS";
  public function byebye() {
    // we can access a constant from inside the class by using the self keyword 
    echo self::LEAVING_MESSAGE;
  }
}

$goodbye = new Goodbye();
$goodbye->byebye();
?>