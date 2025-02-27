<?php

$nama_depan = "ahmad";
$nama_belakang= "fauzil";
$nama_paling_belakang = "azhim";
$umur = 18;
$tb = 169;

echo $nama_depan . " " . $nama_belakang;
echo "<br>nama saya adalah $nama_depan dan saya berumur $umur";

echo "<br /><br />";

// variabel system 
echo 'dokumen root'. $_SERVER
["DOCUMENT_ROOT"];

echo "<br>";

// variabel constant
define ('PHI' , 3.14 );

$r = 8;
$luas = PHI * $r * $r;

echo "lingkaran dengan jari-jari {$r} cm memiliki luas {$luas}cm";