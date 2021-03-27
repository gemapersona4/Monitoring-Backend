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
echo "\n\n";

// 2. ARRAY
echo "NOMOR 2\n";
echo "---------------------------------------------------------------------------------------------------\n";

$collectionValue = "5956560159466056";

echo "before => " . (int) $collectionValue . "\n\n";

function selectionValue(string $collectionValue): int {
	$collectionValueNoZero = explode("0", $collectionValue);
	// var_dump($collectionValueNoZero);die;
	
	foreach ($collectionValueNoZero as $key => $value) {
		$new[] = str_split($value);
		sort($new[$key]);
	}
	
	$collectionValueNew = array_merge(...$new);
	$collectionValueNew = implode("", $collectionValueNew);

	return (int) $collectionValueNew;
}

$result = selectionValue($collectionValue);

echo "after => " . $result;

echo "\n\n\n";

// 3. ASSOCIATIVE ARRAY
echo "NOMOR 3\n";
echo "---------------------------------------------------------------------------------------------------\n";

// Masuk Program
echo "----------------------------------\n" .
		 "--------PROGRAM INPUT DATA--------\n" .
		 "----------------------------------\n" .
		 "Program ini berfungsi untuk memasukkan data santri\n" .
		 "Ketik {ENTER} di keyboard mu...";
$pilihan = trim(fgets(STDIN));

// Program Input
echo "\n";
$index = 1;
while(true) {

	echo "Masukkan data ke-{$index} => \n";
	
	echo "Nama : ";
	$nama[] = trim(fgets(STDIN));
	
	echo "NIK : ";
	$nik[] = trim(fgets(STDIN));
	echo "\n";
	
	echo "Pilih jurusan, \n" .
			 "----------------------------------\n" .
			 "1. Programmer 2. Multimedia 3. Marketer \n" . 
			 "***Cara isi => misal, {Programmer}, ketik seperti itu! \n" . 
			 "Jurusan : ";
	$jurusan[] = trim(fgets(STDIN));
	echo "\n";
	
	echo "Pilih divisi, \n" .
			 "----------------------------------\n" .
			 "1. Backend 2. Frontend 3. Mobile \n" . 
			 "***Cara isi => misal, {Backend}, ketik seperti itu! \n" . 
			 "Divisi : ";
	$divisi[] = trim(fgets(STDIN));
	echo "\n";
	
	echo "Usia : ";
	$usia[] = (int) trim(fgets(STDIN));
	echo "\n";

	echo "Tambah data ? \n(ketikkan {ENTER} / n) {gunakan huruf kecil}\n=> ";
	$pilihan = trim(fgets(STDIN));
	if( $pilihan === 'n' ) {
		break;
	} 
	
	$index++;
	echo "\n";
}

// Input dimasukkan ke dalam 1 array
for( $i = 0; $i < count($nama); $i++ ) {
	$data[] = [
		'nama' => $nama[$i],
		'nik' => $nik[$i],
		'jurusan' => $jurusan[$i],
		'divisi' => $divisi[$i],
		'usia' => $usia[$i]
	];
}

echo "\n";

// 1. Daftar santri dengan minat 'Backend'
echo "----------------------------------\n" .
		 "----------------------------------\n" .
		 "Yang minat sebagai Backend adalah ";
foreach( $data as $key => $value ) {
	if( $value['divisi'] === 'Backend' ) {
		echo "{$value['nama']}, ";
		$index++;
	}
}

echo "\n";

// 2. Jumlah santri berusia kurang dari 25
echo "Usia yang kurang dari 25 adalah ";
foreach( $data as $key => $value ) {
	if( $value['usia'] < 25 ) {
		echo "{$value['nama']}, ";
	}
}

echo "\n";

// // 3. Santri paling muda ---harus beda usia. misal, ga boleh ada yang usianya sama
echo "Usia paling muda adalah ";

$muda = [];
foreach( $data as $key => $value ) {
	$muda[$data[$key]['usia']] = $value;
}

ksort($muda);
print_r($muda[array_key_first($muda)]);

// print_r($muda);
echo "\n";
echo "----------------------------------\n" .
		 "----------------------------------\n";
