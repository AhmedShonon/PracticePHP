<?php
trait trait1{
    function showM()
    {
        echo "This is showing display";
    }
}

trait trait2{
    function showAge()
    {
        echo "my age is 23";
    }
}

class normal{
    use trait1;
    use trait2;

    function show()
    {
        echo "this is from inside the normal class";
    }
}

$obj1= new normal();
$obj1->showM();
echo "<br>";
$obj1->showAge();
echo "<br>";
$obj1->show();


?>