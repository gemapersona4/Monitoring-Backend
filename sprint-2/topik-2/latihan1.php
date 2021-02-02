<?php

// بِسْمِ اللَّهِ الرَّحْمَنِ الرَّحِيم 
// ٱلْحَمْدُ لِلَّٰهِ رَبِّ ٱلْعَالَمِينَ
// أَشْهَدُ أَنْ لَا إِلَهَ إِلَّا اللهُ وَأَشْهَدُ أَنَّ مُحَمَّدًا رَسُوْلُ اللهِ
// اللَّهُمَّ صَلِّ عَلَى مُحَمَّدٍ ، وَعَلَى آلِ مُحَمَّدٍ ، كَمَا صَلَّيْتَ عَلَى إِبْرَاهِيمَ وَعَلَى آلِ إِبْرَاهِيمَ ، إِنَّكَ حَمِيدٌ مَجِيدٌ
//  ، اللَّهُمَّ بَارِكْ عَلَى مُحَمَّدٍ ، وَعَلَى آلِ مُحَمَّدٍ ، كَمَا بَارَكْتَ عَلَى إِبْرَاهِيمَ ، وَعَلَى آلِ إِبْرَاهِيمَ ، إِنَّكَ حَمِيدٌ مَجِيدٌ

class Rectangle {

    public function __construct() {
        echo "\n\n==============\n";
        echo "|PROGRAM AREA|\n";
        echo "==============\n";
    }
    
    public static function areaRectangle($length, $width) {
        return $length * $width;
    }
}

$area = new Rectangle();
echo "input length = ";
$length = trim(fgets(STDIN));
echo "input width = ";
$width = trim(fgets(STDIN));
echo "total area = ";
echo $area->areaRectangle($length, $width);
echo "\n";

?>