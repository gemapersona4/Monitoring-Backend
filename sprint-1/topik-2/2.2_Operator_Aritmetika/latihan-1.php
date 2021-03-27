<?php

echo "Luas dan Keliling Persegi Panjang by Gema Masse Cipta\n";
echo "Masukkan nilai panjang = ";
$p = trim(fgets(STDIN));
echo "Masukkan nilai lebar = ";
$l = trim(fgets(STDIN));
$L = $p * $l;
$K = 2 * ($p + $l);
echo "Luas persegi panjang tersebut adalah $L cm^2\n";
echo "Keliling persegi panjang tersebut adalah $K cm\n";