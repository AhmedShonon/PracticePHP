<?php

abstract class abs{
    abstract function absMethod();

    function message()
    {
        echo "This is normal method from abstract class";
    }
}

class abc extends abs{
    function absMethod()
    {
        echo "This is from child of abstract class";
        $this->message();
    }
    
}

class xyz extends abs{
    function absMethod()
    {
        echo "This is another abstract method user";
    }
    function nonabsMethod()
    {
        echo "This method isn't a abstract method";
    }
}

$obj1 = new abc;
 $obj1->absMethod();
 $obj2 = new xyz;
 $obj2->nonabsMethod();



?>