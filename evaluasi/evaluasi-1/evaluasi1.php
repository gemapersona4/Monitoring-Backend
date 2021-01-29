<?php

// EVALUASI 1
// 1. LOOP
echo "\nNOMOR 1\n";
echo "---------------------------------------------------------------------------------------------------\n";
$plus = "+";
$min = "-";

// POLA 1
echo "INI POLA 1 = \n";
for($i=1; $i<10; $i++) {
    for($j=1; $j<10; $j++) {
        if ($j%2==1) {
            echo $plus;
        } else {
            echo $min;
        }
    }    
    echo "\n";
}
echo "\n";
// POLA 2
echo "INI POLA 2 = \n";
for($i=1; $i<10; $i++) {
    for($j=1; $j<10; $j++) {
       if ($i%2==1) {
           echo $min;
       } else {
           echo $plus;
       }
    }    
    echo "\n";
}
echo "\n";

// 2. ARRAY
echo "NOMOR 2\n";
echo "---------------------------------------------------------------------------------------------------\n";

$integer = "5956560159466056";

echo strripos($integer, "0");




// 3. ASSOCIATIVE ARRAY
echo "\n=========\n";
echo "|NOMOR 3|\n";
echo "=========\n";
echo "---------------------------------------------------------------------------------------------------\n";
/* 
Gema Masse Cipta
3175052405010002
Programmer
PHP Backend
*/
// echo "Jumlah peserta = "; 
// $peserta =  trim(fgets(STDIN)) . "\n";
// $s= [
//     [
//       'name' => trim(fgets(STDIN)),
//       'nik'  => trim(fgets(STDIN)),
//       'jurusan' => trim(fgets(STDIN)),
//       'divisi' => trim(fgets(STDIN))
//     ]
//     ];

// $s = [[]]
// for ($i=1; $i<=$peserta; $i++) {
//     echo "form ke-$i = ";
//     $nilai = trim(fgets(STDIN));
// }
// print_r($s);

?>