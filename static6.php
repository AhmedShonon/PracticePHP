<?php
class abc {
    public static $name = "Sabbir";
    public static function show()
    {
        echo self::$name;
    }
}

class xyz extends abc{

    public static function show()
    {
        echo parent::$name;
    }
     public static function showName()
    {
        echo parent::$name;
    }
}

$obj = new xyz();
$obj -> show();
echo "<br>";
$obj -> showName();





?>