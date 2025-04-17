<?php
class Base
{
    function __construct()
    {
        echo "Constructor Base Class<br>";
    }

    function func(){
        echo "function 1";
    }
}

class Child extends Base 
{
    function __construct()
    {
        
        echo "Construct Child Class<br>";
        parent::__construct();
        // parent::func();
    }
    function func()
    {
        echo "function 2";
    }
}

$obj = new Child();
$obj->func();//this func execute from the child class where as obj instance created from child class 






?>