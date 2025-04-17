<?php


class class1
{

    function __construct()
    {
        return $this->num = 11111;
    }

    protected function myfunc()
    {
            echo $this->num;
    }

}

class class2 extends class1
{
  function getFunction(){
    $this->myfunc();
  }
}
$obj = new class2();
echo $obj ->getFunction();


?>