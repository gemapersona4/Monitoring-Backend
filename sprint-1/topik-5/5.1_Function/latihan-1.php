<?php 

// LATIHAN NOMOR 1
// MENCARI LUAS PERSEGI PANJANG
function calcRectangleArea($width,$length) {
    $luas = $width*$length;
    return $luas;
}

echo "\n++++++++++++++++\nLATIHAN 1";
echo "\n\n1. Menghitung Luas Persegi Panjang\n   " . calcRectangleArea(5, 10) . " cm^2\n\n";

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
echo "2. Menghitung Luas Segitiga\n   " . calcTriangleArea(5, 10) . " cm^2\n";

// MENCARI LUAS LINGKARAN
function calcCircleArea($radius) {
    $luas = $radius**2*pi();
    return $luas;
}

echo "3. Menghitung Luas Lingkaran\n   " . calcCircleArea(5) . " cm^2\n";

// MENCARI LUAS TRAPESIUM
function calcTrapezoidArea($up,$down,$height) {
    $luas = ($up+$down)*$height/2;
    return $luas;
}

echo "4. Menghitung Luas Trapesium\n   " . calcTrapezoidArea(5, 10, 15) . " cm^2\n";

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