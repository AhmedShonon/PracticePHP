<?php

//make secure $num variable by using protected access modifier 
class class1
{
    // private $num;
    protected $num;
    function __construct()
    {
        return $this->num = 11111;
    }

}

class class2 extends class1
{
  function getvalue()
  {
    return $this->num;
  }
}
$obj = new class2();
// echo "<br>";
// echo $obj->num = 25;
// echo $obj->num;
echo $obj ->getvalue();


?>