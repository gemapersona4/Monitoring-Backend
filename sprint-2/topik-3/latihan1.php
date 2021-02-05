<?php

// بِسْمِ اللَّهِ الرَّحْمَنِ الرَّحِيم 
// ٱلْحَمْدُ لِلَّٰهِ رَبِّ ٱلْعَالَمِينَ
// أَشْهَدُ أَنْ لَا إِلَهَ إِلَّا اللهُ وَأَشْهَدُ أَنَّ مُحَمَّدًا رَسُوْلُ اللهِ
// اللَّهُمَّ صَلِّ عَلَى مُحَمَّدٍ ، وَعَلَى آلِ مُحَمَّدٍ ، كَمَا صَلَّيْتَ عَلَى إِبْرَاهِيمَ وَعَلَى آلِ إِبْرَاهِيمَ ، إِنَّكَ حَمِيدٌ مَجِيدٌ
//  ، اللَّهُمَّ بَارِكْ عَلَى مُحَمَّدٍ ، وَعَلَى آلِ مُحَمَّدٍ ، كَمَا بَارَكْتَ عَلَى إِبْرَاهِيمَ ، وَعَلَى آلِ إِبْرَاهِيمَ ، إِنَّكَ حَمِيدٌ مَجِيدٌ

class Area {

    public function __construct() {
        echo "\n\n==============\n";
        echo "|PROGRAM AREA|\n";
        echo "==============\n";
    }
    
    public static function areaRectangle($length, $width) {
        return $length * $width;
    }

    public static function areaCircle($radius) {
        return pi() * $radius**2;
    }

    public static function areaTrapezoid($up, $down, $height) {
        return ($up + $down) * $height / 2;
    }
}

function areaRec() {
    $area = new Area();
    echo "\n\n========================\n";
        echo "|PROGRAM RECTANGLE AREA|\n";
        echo "========================\n";
    echo "input length = ";
    $length = trim(fgets(STDIN));
    echo "input width = ";
    $width = trim(fgets(STDIN));
    if ( $length < 0 || $width < 0 ) {
        throw new Exception('eitsss kamu masukin angka minus, ya ngga bisa lah yaa!!!! '."\n");
    } else {
    echo "total area = ";
    echo Area::areaRectangle($length, $width);
    echo "\n";    
    }
} 
function areaCir() {
    $area = new Area();
    echo "\n\n=====================\n";
    echo "|PROGRAM CIRCLE AREA|\n";
    echo "=====================\n";
    echo "input radius = ";
    $radius = trim(fgets(STDIN));
    if ( $radius < 0 ) {
        throw new Exception('eitsss kamu masukin angka minus, ya ngga bisa lah yaa!!!! '."\n");
    } else {
    echo "total area = ";
    echo Area::areaCircle($radius);
    echo "\n";    
    }
}

function areaTra() {
    $area = new Area();
    echo "\n\n========================\n";
    echo "|PROGRAM TRAPEZOID AREA|\n";
    echo "========================\n";
    echo "input up = ";
    $up = trim(fgets(STDIN));
    echo "input down = ";
    $down = trim(fgets(STDIN));
    echo "input height = ";
    $height = trim(fgets(STDIN));
    if ( $up < 0 || $down < 0 || $height < 0 ) {
        throw new Exception('eitsss kamu masukin angka minus, ya ngga bisa lah yaa!!!! '."\n");
    } else {
    echo "total area = ";
    echo Area::areaTrapezoid($up, $down, $height);
    echo "\n";    
    }
}

areaRec();
areaCir();
areaTra();

?>
