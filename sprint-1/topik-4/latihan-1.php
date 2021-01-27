<?php

// LATIHAN NOMOR 1
$data = [5,9,6,7,9,8,10,7,8];
echo "\n \n";
echo "LATIHAN NOMOR 1 \n\n";
echo '$data = [5,9,6,7,9,8,10,7,8]' . "\n \n";

// MEAN
$count = count($data);
$sum = array_sum($data);
$mean = $sum / $count;
echo "1. Meannya adalah = " . $mean . "\n \n";

// MEDIAN 
sort($data);

$middle = round(count($data) / 2);;
$total = $data[$middle - 1];
echo "2. Mediannya adalah = " . $total;
echo "\n \n";

// MODE
$mode = array_count_values($data);
echo "3. Modus \n";
foreach ($mode as $k => $v) {
    if ($v==max($mode)) {
        echo "        Modus = $k ada sebanyak  $v kali \n";
    }
}
echo "\n------------------------------------------------------------------------\n\n";

// LATIHAN NOMOR 2
echo "LATIHAN NOMOR 2 \n\n";
echo '$data = [5,9,6,7,9,8,10,7,8]' . "\n \n";
sort($data);

for ($i=8; $i > 3; $i--) { 
    if ($data[$i]==$data[$i-1]) {
        continue;
    } else {
    $highest[] = $data[$i];
    }
}
for ($i=0; $i < 3; $i++) { 
    $lowest[] = $data[$i];
}
echo "++++highest value is =>++++ \n\n";
print_r($highest);
echo "++++lowest value is =>++++ \n\n";
print_r($lowest);
?>