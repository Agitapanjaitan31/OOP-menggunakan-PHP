<?php

class ContohStatic {
    public static $angka = 1;

    public static function halo() {
        return "Halo " . self::$angka++ . " kali. <br>";
    }
}
class Contoh {
    public static $angka = 1;

    public function halo() {
        return "Halo " . self::$angka++ . " kali. <br>";
    }
}

// Example usage of static property within a non-static method
$obj = new Contoh();
echo $obj->halo(); // Calling non-static method
echo $obj->halo(); // Calling non-static method again
echo $obj->halo(); // Calling non-static method again

echo "<hr>";

$obj2 = new Contoh();
echo $obj2->halo(); // Calling non-static method of a different object
echo $obj2->halo(); // Calling non-static method of a different object again
echo $obj2->halo(); // Calling non-static method of a different object again

