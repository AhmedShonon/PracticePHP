<?php
class staticClass
{
    static $name = "Sabbir Ahmed Shonon";
    static function age()
    {
      echo self::$name."Your age is:"."18";
    }
}

echo staticClass::$name;
echo "<br>";
echo staticClass::age();
?>