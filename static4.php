<?php

class abs{
    public static $name = 'Have a nice day';
    public static function show(){
        echo self::$name;
    }
    //when want to change from the static message the need to use construct
    function __construct()
    {
        echo self::$name = "Updated Message: Have a Bad Day";
    }
}

$obj = new abs();



?>