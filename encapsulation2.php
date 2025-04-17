<?php
class class1
{
    public $num;
    function __construct()
    {
        echo $this->num = 456789;
    }
}

$obj = new class1();
echo "<br>";
echo $obj->num = 25;
?>