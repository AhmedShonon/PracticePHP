<?php
//real autoload example
function  __autoload($class){
  require $class.'.php';
}

$obj = new first();
echo "<br>";
$obj1 = new second();
echo "<br>";
$obj2 = new third();
echo "<br>";
$obj3 = new four();

?>