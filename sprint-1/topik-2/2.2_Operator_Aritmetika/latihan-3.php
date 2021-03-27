<?php

echo "\n\nPROGRAM KONVERSI SUHU OTOMATIS\n";

echo "Masukkan nilai suhu dalam celcius = ";
$suhuCelcius = trim(fgets(STDIN));
$suhuFahrenheit = ($suhuCelcius * 9/5) + 32;
$suhuKelvin = $suhuCelcius + 273.15;
$suhuReamur = $suhuCelcius * 4/5;

echo "\nKonversi Suhu by Gema\n\n";
echo "1. Suhu sekarang $suhuCelcius derajat Celcius \n";
echo "2. Suhu sekarang " .  $suhuFahrenheit . " Fahrenheit \n"; 
echo "3. Suhu sekarang " .  $suhuKelvin . " Kelvin \n"; 
echo "4. Suhu sekarang " .  $suhuReamur . " Reamur \n\n"; 


