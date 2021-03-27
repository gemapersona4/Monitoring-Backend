<?php

$students = [
    [
        'id' => 'IT-001',
        'name' => 'Ridwan',
        'division' => 'PHP Backend',
        'age' => 25,
    ],
    [
        'id' => 'IT-010',
        'name' => 'Achmad',
        'division' => 'Java for Android',
        'age' => 23,
    ],
    [
        'id' => 'IT-005',
        'name' => 'Yusuf',
        'division' => 'ReactJS',
        'age' => 22,
    ],
    [
        'id' => 'IT-002',
        'name' => 'Arief',
        'division' => 'PHP Backend',
        'age' => 21,
    ],
    [
        'id' => 'IT-004',
        'name' => 'Dayat',
        'division' => 'React Native',
        'age' => 21,
    ],
    [
        'id' => 'IT-017',
        'name' => 'Lutfi',
        'division' => 'ReactJS',
        'age' => 18,
    ],
];

// AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA
echo "a) daftar santri berdasar nomor induk kecil ke besar = ";
    function sortId($siswa) {
    echo "\n[";
    $a = array_column($siswa, 'id');
    sort($a);
    foreach ($a as $b) {
        echo $b . ", ";
    }
    echo "]";
    echo "\n\n";
    }
    sortId($students);
// BBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBBB
    echo "b) daftar satri berdasar nama kecil ke besar = ";
    function sortName($siswa) {
    echo "\n[";
    $a = array_column($siswa, 'name');
    sort($a);
    foreach ($a as $b) {
        echo $b . ", ";
    }
    echo "]";
    echo "\n\n";
    }
    sortName($students);

// CCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCCC
echo "c) daftar santri dengan minat 'PHP Backend' =\n";
    function searchBackend($students, $index, $search) {
        $rangesearch = [];
        foreach ($students as $key => $value) {
            if ($value[$index] == $search) {
                $rangesearch[] = $value;
            }
        }
        return $rangesearch;
    }
    print_r(searchBackend($students, 'division', 'PHP Backend' ));
    echo "\n";

// DDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDD
echo "d) jumlah santri berusia kurang dari 25 = ";    
    function search_age($students, $jenis, $search) {
        $urutan = [];
        foreach ($students as $key => $value) {
            if ($value[$jenis] < $search) {
                $urutan[] = $value;
            }
        }
        return count($urutan);
    }
    echo search_age($students, 'age', '25');
    echo "\n";

// EEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEE
echo "e) rerata usia santri = ";    
    function meanSantri($students) {
        $sum = 0;
        foreach ($students as $key => $value) {
            $sum += $value['age'];
        }
        return (int)($sum / count($students));
    } 
        echo meanSantri($students);
        echo "\n";

// FFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFFF
echo "f) santri paling muda = ";
    function veryYoung($students) {
        $search = [];
        foreach ($students as $key => $value) {
            $search[$students[$key]['age']] = $value;
        }
        ksort($search);
        return $search[array_key_first($search)];
    }
    print_r(veryYoung($students));
    echo "\n\n\n";
