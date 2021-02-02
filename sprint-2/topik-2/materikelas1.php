<?php

class Library {
    public static  $title = "Syarah Ushul Tsalatsah",
           $isbn = "602 6247 12 2";

    public function __construct(){
        echo "HALOOOOOO!!!!!!!!! GANTENG!!!!!!!!!!!!\n";
    }
    
    public static function listBook() {
        return self::$title . ",---" . self::$isbn . "---";
    }
    public static function getBook() {
    return "You get " . self::$title . ", ISBN: --" . self::$isbn . "-- in " . date("l, d-M-Y") . "\nand you must to get back the book on " . date("l, d-M-Y", time()+60*60*24*14);
    }

    public static function returnBook() {
        return "***You return " . self::$title . ", ISBN: --" . self::$isbn . "--. Thanks for your responsibilities :)";
    }
}

echo "\n";

// daftar buku

// buku1
// $buku1 = new Library();
// $buku1->title = "Syarah Ushul Tsalatsah";
// $buku1->isbn = "602 6247 12 2";    

// $buku2 = new Library();
// $buku2->title = "Al-Himmah Al-Aliyah";
// $buku2->isbn = "293 5271 06 4";    

echo "\n";

echo "===================LIST_BOOK===================";
echo "\n1. ";
echo Library::listBook();
// echo "\n2. ";
// echo Library::listBook();
echo "\n===================END_LIST===================\n";

echo "\n1. ";
echo Library::getBook();
echo "\n\n";
echo Library::returnBook();
echo "\n";

// buku2
// echo "\n2. ";
// echo $buku2->getBook();
// echo "\n\n";
// echo $buku2->returnBook();
// echo "\n";

// echo "\n";

?>