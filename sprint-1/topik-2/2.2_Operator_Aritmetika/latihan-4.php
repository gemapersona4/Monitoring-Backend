<?php 

echo "\nBarisan Aritmatika by Gema Masse Cipta\n\n";

echo "barisan bilangan yang diketahui 2, 4, 6, 8, 10, ...\n";
echo "indeks(n) bilangan ini dimulai dari 0 \n";
echo "masukkan nilai ke-n berapa yang ingin kalian ketahui\n";
echo "nilai yang diketahui(r) akan dimunculkan setelahnya \n\n";

echo "Masukkan nilai n ke-1 yang ingin kamu ketahui =  ";
$n = trim(fgets(STDIN));
echo "Masukkan nilai n ke-2 yang ingin kamu ketahui =  ";
$n1 = trim(fgets(STDIN));
echo "Masukkan nilai n ke-3 yang ingin kamu ketahui =  ";
$n2 = trim(fgets(STDIN));

$r = ($n+1)*2;
$r1 = ($n1+1)*2;
$r2 = ($n2+1)*2;

echo "\nrumus yang dipakai, (n+1)*2 \n\n";
echo "1. jika n=$n, nilai r: $r \n";
echo "2. jika n=$n1, nilai r: $r1 \n";
echo "3. jika n=$n2, nilai r: $r2\n";

