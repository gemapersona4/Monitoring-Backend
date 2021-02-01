<?php

// LATIHAN NOMOR 1
// MENCARI LUAS PERSEGI PANJANG
$calcRectangleArea = function($width,$length) {
    $luas = $width*$length;
    return $luas;
};


echo "\n++++++++++++++++\nLATIHAN 1";
echo "\n\n1. Menghitung Luas Persegi Panjang\n";
echo "Masukkan nilai panjang = ";
$length = trim(fgets(STDIN));
echo "Masukkan nilai lebar = ";
$width = trim(fgets(STDIN));
echo "Luasnya adalah = ";
echo $calcRectangleArea($length, $width) . " cm^2\n\n";

// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

// LATIHAN NOMOR 2
// MENCARI LUAS SEGITIGA
$calcTriangleArea = function($base,$height) {
    $luas = $base*$height/2;
    return $luas;
};

echo "++++++++++++++++\nLATIHAN 2\n";
echo "\n2. Menghitung Luas Segitiga\n";
echo "Masukkan nilai alas = ";
$base = trim(fgets(STDIN));
echo "Masukkan nilai tinggi = ";
$height = trim(fgets(STDIN));
echo "Luasnya adalah = ";
echo $calcTriangleArea($base, $height) . " cm^2\n\n";


// MENCARI LUAS LINGKARAN
$calcCircleArea = function($radius) {
    $luas = $radius**2*pi();
    return $luas;
};

echo "3. Menghitung Luas Lingkaran\n"; 
echo "Masukkan nilai jari-jari (r) = ";
$radius = trim(fgets(STDIN));
echo "Luasnya adalah = ";
echo $calcCircleArea($radius) . " cm^2\n\n";


// MENCARI LUAS TRAPESIUM
$calcTrapezoidArea = function($up,$down,$height) {
    $luas = ($up+$down)*$height/2;
    return $luas;
};

echo "4. Menghitung Luas Trapesium\n";
echo "Masukkan nilai atas = ";
$up = trim(fgets(STDIN));
echo "Masukkan nilai bawah = ";
$down = trim(fgets(STDIN));
echo "Masukkan nilai tinggi = ";
$height = trim(fgets(STDIN));
echo "Luasnya adalah = ";
echo $calcTrapezoidArea($up, $down, $height) . " cm^2\n\n";


?>