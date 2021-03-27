<?php 

// LATIHAN NOMOR 1
// MENCARI LUAS PERSEGI PANJANG
function calcRectangleArea(int $length, $width): int {
    $luas = $width*$length;
    return $luas;
}


echo "\n++++++++++++++++\nLATIHAN 1";
echo "\n\n1. Menghitung Luas Persegi Panjang\n";
echo "Masukkan nilai panjang = ";
$length = trim(fgets(STDIN));
echo "Masukkan nilai lebar = ";
$width = trim(fgets(STDIN));
echo "Luasnya adalah = ";
echo calcRectangleArea($length, $width) . " cm^2\n\n";

// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

// LATIHAN NOMOR 2
// MENCARI LUAS SEGITIGA
function calcTriangleArea($base,$height) {
    $luas = $base*$height/2;
    return $luas;
}

echo "++++++++++++++++\nLATIHAN 2\n";
echo "\n2. Menghitung Luas Segitiga\n";
echo "Masukkan nilai alas = ";
$base = trim(fgets(STDIN));
echo "Masukkan nilai tinggi = ";
$height = trim(fgets(STDIN));
echo "Luasnya adalah = ";
echo calcTriangleArea($base, $height) . " cm^2\n\n";


// MENCARI LUAS LINGKARAN
function calcCircleArea($radius) {
    $luas = $radius**2*pi();
    return $luas;
}

echo "3. Menghitung Luas Lingkaran\n"; 
echo "Masukkan nilai jari-jari (r) = ";
$radius = trim(fgets(STDIN));
echo "Luasnya adalah = ";
echo calcCircleArea($radius) . " cm^2\n\n";


// MENCARI LUAS TRAPESIUM
function calcTrapezoidArea($up,$down,$height) {
    $luas = ($up+$down)*$height/2;
    return $luas;
}

echo "4. Menghitung Luas Trapesium\n";
echo "Masukkan nilai atas = ";
$up = trim(fgets(STDIN));
echo "Masukkan nilai bawah = ";
$down = trim(fgets(STDIN));
echo "Masukkan nilai tinggi = ";
$height = trim(fgets(STDIN));
echo "Luasnya adalah = ";
echo calcTrapezoidArea($up, $down, $height) . " cm^2\n\n";

// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

// LATIHAN NOMOR 3

echo "\n++++++++++++++++\nLATIHAN 3\n\n";

$first = [2,3,4,5,6,7,8,9];

function replaceArray($first) {
    echo "before => [";
    foreach ($first as $f) {
        echo $f . ", ";
    }
    echo "]\n";
    echo "after => [";
    foreach ($first as $f) {
        echo $f*3 . ", ";
    }
    echo "]\n";
}

replaceArray($first);
echo "\n\n";




?>