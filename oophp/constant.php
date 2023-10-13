<?php 

define('NAMA', 'Agung Dwi S');
echo NAMA;

echo "<br>";

const UMUR = 34;
echo UMUR;
echo "<br>";

class Coba {
    const NAMA = 'Agung';
}

echo Coba::NAMA;

echo "<br>";

echo __FILE__;


function coba() {
    return __FUNCTION__;
}

echo "<br>";
echo coba();

class Coba {
    public $kelas = __CLASS__;
}
$obj = new Coba;
echo $obj->kelas;










?>