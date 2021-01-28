<?php

// LATIHAN NOMOR 1
// MENCARI LUAS PERSEGI PANJANG
$calcRectangleArea = function($width,$length) {
    $luas = $width*$length;
    return $luas;
};

echo "\n++++++++++++++++\nLATIHAN 1";
echo "\n\n1. Menghitung Luas Persegi Panjang\n   " . $calcRectangleArea(5, 10) . " cm^2\n\n";

























// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
// +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++

// LATIHAN NOMOR 2
// MENCARI LUAS SEGITIGA
$calcTriangleArea = function ($base,$height) {
    $luas = $base*$height/2;
    return $luas;
};

echo "++++++++++++++++\nLATIHAN 2\n";
echo "2. Menghitung Luas Segitiga\n   " . $calcTriangleArea(5, 10) . " cm^2\n";

// MENCARI LUAS LINGKARAN
$calcCircleArea = function ($radius) {
    $luas = $radius**2*pi();
    return $luas;
};

echo "3. Menghitung Luas Lingkaran\n   " . $calcCircleArea(5) . " cm^2\n";

// MENCARI LUAS TRAPESIUM
$calcTrapezoidArea = function ($up,$down,$height) {
    $luas = ($up+$down)*$height/2;
    return $luas;
};

echo "4. Menghitung Luas Trapesium\n   " . $calcTrapezoidArea(5, 10, 15) . " cm^2\n";

?>