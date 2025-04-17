<?php
class Myclass {

    public $a =10;

    function showvalue(){
        return $this->a++;
    }
}

$obj = new Myclass();
$obj2 = new Myclass();
echo $obj->a;
echo $obj->a;
echo $obj->a;
echo $obj->a;
echo "<br>";
echo $obj->showvalue();
echo "<br>";
echo $obj->showvalue();
echo "<br>";
echo $obj-> a;

echo "For object 2";
echo "<br>";
echo $obj2-> a;

echo "<br>";
echo $obj2-> showvalue();

echo "<br>";
echo $obj2-> a;
?>