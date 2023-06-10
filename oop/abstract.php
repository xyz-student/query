<?php
// abstract class methods is public or protected
abstract class perent
{

    public $name;
    function __construct($name)
    {
        $this->name = $name;
    }
    abstract  function myprint();
}

class ChildA extends perent
{
    function myprint()
    {
        echo "this is my first child $this->name <br>";
    }
}
class ChildB extends perent
{
    function myprint()
    {
        echo "this is my ChildB $this->name <br>";
    }
}
class ChildC extends perent
{
    function myprint()
    {
        echo "this is my ChildC $this->name <br>";
    }
}

$ChildA = new ChildA("Ram1");
$ChildA->myprint();

$ChildB = new ChildB("Ram2");
$ChildB->myprint();

$ChildC = new ChildC("Ram3");
$ChildC->myprint();