<?php
trait trait1{
    public function showmsg(){
        echo "This is trait: Here i can commonly write";
    }
    //  public function showmsg2(){
    //     echo "This is trait: Here i can commonly write";
    // }
}

trait trait2{
   
     public function showmsg2(){
        echo "This is trait: Here i can commonly write 222";
    }
}

trait trait3{

     public function showmsg3(){
        echo "This is trait: Here i can commonly write 333";
    }
}


class a {
    use trait1,trait2;
    use trait3;
}
class b {
   
    use trait2;
   
}
class c {
  
}

$obj = new a();
$obj2 = new b();
// $obj3 = new c();
$obj->showmsg();
echo "<br>";
$obj->showmsg2();
echo "<br>";
$obj->showmsg3();
echo "<br>";
$obj2->showmsg2();
echo "<br>";
// $obj3->showmsg();


?>