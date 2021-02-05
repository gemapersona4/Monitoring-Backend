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
    
    public static function areaCircle($radius) {
        return pi() * $radius**2;
    }

    public static function areaTrapezoid($up, $down, $height) {
        return ($up + $down) * $height / 2;
    }
}


$area = new Area();
echo "\n||||PROGRAM CIRCLE AREA|||\n";
echo "===========================\n";

echo "input radius = ";
$radius = trim(fgets(STDIN));
echo "total area circle = ";
echo Area::areaCircle($radius);
echo "\n";

echo "\n||||PROGRAM TRAPEZOID AREA|||\n";
echo "===========================\n";

echo "input up = ";
$up = trim(fgets(STDIN));
echo "input down = ";
$down = trim(fgets(STDIN));
echo "input height = ";
$height = trim(fgets(STDIN));
echo "total area trapezoid = ";
echo Area::areaTrapezoid($up, $down, $height);
echo "\n";

?>