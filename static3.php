<?php
class absClass{
    public static $name="Hello EveryOne";
    public static function showName()
    {
        echo self::$name;
    }
}
echo absClass::showName();
?>