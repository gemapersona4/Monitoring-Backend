<?php
// Bismillahirrahmaniirahiim
// Pembukaan

$data = [ 5, 9, 6, 7, 9, 8, 10, 7, 8 ];
sort($data);
echo "\n";

echo '$data => [';
foreach( $data as $d ) {
	echo "{$d}, ";
}
echo "] \n";

// angkanya
echo "angka => ";
foreach ($data as $d) {
	echo $d . ", ";
}
echo "\n";

// indexnya
echo "index => ";
$i = 0;
foreach ($data as $d) {
	echo $i . ", ";
	$i++;
}
echo "\n\n";

echo "------------------------------------------------------------------------\n";
echo "LATIHAN NOMOR 1 \n\n";


// MEAN
echo "1. MEAN \n";
$sum = array_sum($data);
$count = count($data);
$mean = $sum / $count;
echo "----Meannya adalah = " . $mean . "----\n \n";

// MEDIAN 
// data diurut
echo "2. MEDIAN \n";

// angkanya
echo "angka => ";
foreach ($data as $d) {
	echo $d . ", ";
}
echo "\n";

// indexnya
echo "index => ";
$i = 0;
foreach ($data as $d) {
	echo $i . ", ";
	$i++;
}
echo "\n";

// banyak data
$count = count($data);
echo "banyak data => {$count}";
echo "\n";

// hasil akhir

// ganjil
if( $count % 2 === 1 ) {
	$middle = round((count($data) - 1) / 2);
	echo "nilai tengah, index ke-{$middle}";
	echo "\n";
	$total = $data[$middle];
	echo "jumlah data ganjil\n";
	echo "----Mediannya adalah = " . $total . "----";

	// genap
} elseif( $count % 2 === 0 ) {
	$middle = round((count($data) - 1) / 2);
	echo "nilai tengah, index ke-" . ($middle - 1) . " dan index ke-" . $middle;
	echo "\n";
	echo "nilai tengah, angkanya " . ($data[$middle - 1]) . " dan angkanya " . $data[$middle];
	echo "\n";
	$total = ($data[$middle] + $data[$middle - 1]) / 2;
	echo "ini genap \n";
	echo "----Mediannya adalah = " . $total . "----"; 
}

echo "\n \n";

// MODE
// Melihat banyaknya dari setiap data yang ada
$mode = array_count_values($data);
echo "3. Modus \n";
foreach ($mode as $k => $v) {
		if ($v==max($mode)) {
			echo "----Modus = $k ada sebanyak  $v kali---- \n";
    }
}

echo "\n------------------------------------------------------------------------\n\n";

// LATIHAN NOMOR 2
echo "LATIHAN NOMOR 2 \n\n";
// echo '$data = [5,9,6,7,9,8,10,7,8]' . "\n \n";
for ($i=8; $i>3; $i--) { 
    if($data[$i]==$data[$i-1]) {
      continue;
    } else {
    	$highest[] = $data[$i];
    }
}

for ($i=0; $i<3; $i++) { 
    $lowest[] = $data[$i];
}
echo "highest value is => ";
foreach($highest as $high) {
	echo "{$high}, ";
}
echo "\n";
echo "lowest value is => ";
foreach($lowest as $low) {
	echo "{$low}, ";
}

echo "\n\n";

