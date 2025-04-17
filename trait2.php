<?php
trait trait1{
    public function showmsg(){
        echo "This is trait: Here i can commonly write";
    }
     public function showmsg2(){
        echo "This is trait: Here i can commonly write";
    }
}



class a {
    use trait1;
}
class b {
    use trait1;
}
class c {
  
}

$obj = new a();
$obj2 = new b();
// $obj3 = new c();
$obj->showmsg();
echo "<br>";
$obj2->showmsg2();
echo "<br>";
// $obj3->showmsg();


?>