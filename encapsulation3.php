<?php

//make secure $num variable by using protected access modifier 
class class1
{
    protected $num;
    function __construct()
    {
        return $this->num = 456789;
    }
//2nd
    function setVal()

    {
        $this->num = 1000;
    }

    function getVal()
    
    {
        return $this->num;
    }
}

$obj = new class1();
echo "<br>";
// echo $obj->num = 25;
// echo $obj->num;
echo $obj -> setVal();
echo $obj -> getVal();

?>