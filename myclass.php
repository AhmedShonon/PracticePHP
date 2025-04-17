<?php
class Myclass 
{

    function showMessage(){
        echo "Hello This is OOP concept";
    }
    function message2()
    {
        echo "This is OOP 2";
    }
}

$obj1 = new Myclass();

$obj1 -> showMessage();
$obj1 -> showMessage();
$obj1 -> showMessage();
$obj1 -> showMessage();
$obj1 -> showMessage();
$obj1 -> showMessage();
$obj1 -> showMessage();
$obj1 -> message2();
$obj1 -> message2();
$obj1 -> message2();
$obj1 -> message2();

?>