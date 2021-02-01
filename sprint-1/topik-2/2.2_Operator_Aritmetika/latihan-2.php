<?php

echo "Luas dan Keliling Lingkaran by Gema Masse Cipta\n";

echo "Masukkan nilai jari-jari (r) = ";
$r = trim(fgets(STDIN));

$luasLingkaran =  pi() * $r * $r ;
$kelilingLingkaran = 2 * pi() * $r;

echo "luas lingkarannya adalah " . $luasLingkaran . "\n";
echo "keliling lingkarannya adalah " . $kelilingLingkaran . "\n"; 
?>