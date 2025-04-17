<?php
class Myclass 
{

   function __construct()
   {

   echo $this->x =100;
   echo "<br>This is constructor<br>";
   }


   function middle(){
    echo $this->m = "middle<br>";
    echo "This is for middle<br>";
    echo "Access variable from construct:".$this->x.'<br>';
   }

   function  __destruct()
   {
    echo "This is destructor";
   }
}

$obj1 = new Myclass();
$obj1 ->middle();








?>