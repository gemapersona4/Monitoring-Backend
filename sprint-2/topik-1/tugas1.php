<?php

class Library {
    public $title = "title",
           $isbn = "isbn";

    public function listBook() {
        return "$this->title, ---$this->isbn---";
    }
    public function getBook() {
    return "You get $this->title, ISBN: --$this->isbn-- in " . date("l, d-M-Y") . "\nand you must to get back the book on " . date("l, d-M-Y", time()+60*60*24*14);
    }

    public function returnBook() {
        return "***You return $this->title, ISBN: --$this->isbn--. Thanks for your responsibilities :)";
    }
}

echo "\n";

// daftar buku

// buku1
$buku1 = new Library();
$buku1->title = "Syarah Ushul Tsalatsah";
$buku1->isbn = "602 6247 12 2";    

$buku2 = new Library();
$buku2->title = "Al-Himmah Al-Aliyah";
$buku2->isbn = "293 5271 06 4";    

echo "===================LIST_BOOK===================";
echo "\n1. ";
echo $buku1->listBook();
echo "\n2. ";
echo $buku2->listBook();
echo "\n===================END_LIST===================\n";



echo "\n1. ";
echo $buku1->getBook();
echo "\n\n";
echo $buku1->returnBook();
echo "\n";

// buku2
echo "\n2. ";
echo $buku2->getBook();
echo "\n\n";
echo $buku2->returnBook();
echo "\n";

echo "\n";

?>