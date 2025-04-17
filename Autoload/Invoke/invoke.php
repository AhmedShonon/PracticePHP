<?php
class Myclass{
    public function __construct($a)
    {
        $this->name = $a;
    }

    public function __invoke()
    {
        echo $this->name;
    }
    // function show()
    // {
    //     echo $this->name;
    // }
}

$obj1= new Myclass("Shonon");
$obj1();

?>