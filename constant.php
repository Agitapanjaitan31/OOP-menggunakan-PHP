<?php

// define('NAMA', 'Agita Rahel Panjaitan');
// echo NAMA;
// echo "<br>";
// const UMUR = 18;
// echo UMUR;

class Coba {
    const NAMA = 'Agita Rahel Angrey Panjaitan'; // Define constant within the class using const keyword
    // echo Coba::NAMA;
    // ECHO LINE;
    // function Coba()
    // return FUNCTION;
    // }
}

// echo coba();

$obj = new Coba();
echo $obj::NAMA; // Access constant using the class name and double colon (::)

class Coba2 {
    public $kelas = __CLASS__; // Using magic constant __CLASS__ to get the class name
}

$obj2 = new Coba2();
echo $obj2->kelas;

