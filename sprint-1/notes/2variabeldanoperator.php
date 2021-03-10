<?php 
// Pertemuan 2 -PHP Dasar
// Sintaks PHP

// Standar Output
// echo, print
// print_r
// var_dump

echo "Sandhika Galih";
// #### yang kita liat di browser kita adalah user
// #### pada saat kita bikin web di code editor, kita programmer  
// #### client dan server sama kalo di komputer kita
// #### server bisa dimana pun
// **** klik kanan, view source page, ga akan keliatan php-nya
print "<br>Sandhika Galih"; // tampilan sama kayak echo
print_r("<br>Sandhika Galih<br>"); // tampilan sama kayak echo, bisa juga cetak array
var_dump("Sandhika Galih"); // untuk debugging, ada tipe data dan ukuran

echo 123; // ga perlu kutip
echo "<br>";
echo true; // hasil 1
echo false; // hasil kosong(kalo di browser)

echo "<br>";
echo 'Jum\'at'; //  kutip satu
echo "<br>";
echo "Jum'at"; // kutip 2 lebih sakti

// Penulisan sintaks PHP
// 1. PHP di dalam HTML
// 2. HTML di dalam PHP
?>

<!-- 1 PHP DALAM HTML -->

<!DOCTYPE html>
<html>
<head><title>Document</title>
</head>
<body>
<!-- PHP DALAM HTML -->
    <h1>Halo, Selamat Datang Sandhika <?php echo "sandhika"; ?></h1>
    <p><?php echo "ini adalah paragraf"; ?></p>
</body>
</html>


<!-- 2 HTML DALAM PHP -->

<!DOCTYPE html>
<html>
<head><title>Document</title>
</head>
<body>
    <?php
        echo "<h1>Halo, Selamat Datang Sandhika</h1>";
    ?>
</body>
</html>

<?php

// Variabel dan Tipe Data
// Variabel
$nama = "Sandhika"; //tidak perlu menulis tipe data variabel
// tidak boleh diawali dengan angka, tapi boleh mengandung angka
// $1nama SALAH, $nama1 BENAR
$nama = "Sandhika Galih";
echo "$nama";
$nama = 'Sandhika Galih';
echo "<br>" . '$nama';
// interpolasi di kutip dua, dapat ngecek ada variabel atau ga di dalam kutip dua
// kalo kutip satu ga muncul

// Operator
// aritmatika
// * - + * / %
$x = 10;
$y = 20;
echo "<br>" . $x * $y;

// penggabung string / concetanation
$nama_depan = "Sandhika";
$nama_belakang = "Galih";
echo "<br>$nama_depan" . " " . $nama_belakang;

// Assignment
// =, +=, -=, *=, /=, %=, .=
$x = 1;
$x -= 5;
echo "<br>$x<br>";
$nama = "Sandhika";
$nama .= " ";
$nama .= "Galih";
echo $nama . "<br>";

// perbandingan
// <, >, <=, >=, ==
var_dump(1 < 5);
echo "<br>";
var_dump(1 > 5);
echo "<br>";
var_dump(1 == 5);
echo "<br>";
var_dump(1 == "1");

// identitas
// ===, !==
echo "<br>";
var_dump(1 === "1");

// Logika
// && (AND), || (namanya PIPE, (OR)), ! (NOT)
$x = 10;
echo "<br>";
var_dump($x < 20 && $x % 2 == 0);
echo "<br>";
$x= 30;
var_dump($x < 20 && $x % 2 == 0);
echo "<br>";
var_dump($x < 20 || $x % 2 == 0);

?>