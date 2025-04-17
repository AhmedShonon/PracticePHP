<?php
interface interf1
{
    function sum();
    function abstract();
}

interface interf2
{
    function showmsg();
}

class child implements interf1,interf2{
    function sum()
    {
        echo 10+5;
    }
    function abstract()
    {
        echo 11-5;
    }
    function showmsg()
    {
        echo "this function used in interface 2";
    }
}

$obj1 = new child();
$obj1->sum();
echo "<br>";
$obj1->abstract();
$obj1->showmsg();
?>