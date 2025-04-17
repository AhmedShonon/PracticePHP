<?php

class abs {
    public static $name = "Sabbir Ahmed";
    public static function show()
    {
        echo self::$name;
    }

    public function  __construct($n)
    {
        echo self::$name = $n;
    }

}

$obj = new abs('Shonon');
?>