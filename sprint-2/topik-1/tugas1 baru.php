<?php

class Library {
    public $bookList = [
        1 => [
            "name" => "Syarah Ushul Tsalatsah",
            "isbn" => "602 6247 12 2"
        ],
        [
            "name" => "Riyadus Shalihin",
            "isbn" => "603 6248 11 3"
        ],
        [
            "name" => "Al-Himmah Al-Aliyah",
            "isbn" => "604 6249 10 4"
        ],
        [
            "name" => "Fikih Al-Muyassar",
            "isbn" => "605 6250 09 5"
        ],
    ];

    public function displayBookList() {
        foreach ( $this->bookList as $b => $s  ) {
            echo $b . ". ";
            foreach ( $s as $id => $book ) {
                echo $book . "\n";
            }
        }
    }
} 

$library = new Library();
echo "\n\n   %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%\n   ****************************************\n";
echo "\n   Username = ";
$nama = trim(fgets(STDIN));

echo "\n   ++=============++";
echo "\n   ||LINK TO START||\n";
echo "   ++=============++\n";
echo "\n";

while (true) {
    echo "   ===============================\n";
    echo "   What's up, $nama!              \n";
    echo "   What do you want in my Library?\n";
    echo "   ===============================\n\n";
    echo "   1. Get in Books\n   2. Return Books\n   3. List Books\n   4. Exit\n\n   Write a number = ";
    $selectMenu = trim(fgets(STDIN));
    echo "\n++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++\n";
    echo "++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++\n\n";
        if ( $selectMenu == 1 ) {
            while (true) {
                echo "   -------My Library-------\n";
                foreach ($library->bookList as $no => $id) {
                    echo "   " . $no . " $id[name]" . "\n";
                }
                echo "\nChoose the book (input number) = ";
                $saveBook = trim(fgets(STDIN));
                if ( $saveBook == 1 ) {
                        echo "\n##############################################################\n";
                        echo "You get a book, ";
                        print_r($library->bookList[$saveBook]["name"]);
                        echo "\n";
                        print_r($library->bookList[$saveBook]["isbn"]);
                        echo " at " . date("l, d-M-Y") . "\nand you must to get back the book on "  . date("l, d-M-Y", time()+60*60*24*14);
                        echo "\n##############################################################\n\n";
                        // check
                        // print_r($library->bookList);
                        unset($library->bookList[$saveBook]);
                        // print_r($library->bookList);
                        while (true) {
                            echo "Do you want to finish (case sensitive: Y / N ) ? ";
                            $finish = trim(fgets(STDIN));
                            if ( $finish == "Y") {
                                die;
                            } elseif ($finish == "N") {
                                echo "\n\n\n";
                                break;
                            } else {
                                echo "Your input is wrong, write Y/N\n\n";
                            }
                        }
                } elseif ( $saveBook == 2 ) {
                    echo "\n##############################################################\n";
                        echo "You get a book, ";
                        print_r($library->bookList[$saveBook]["name"]);
                        echo "\n";
                        print_r($library->bookList[$saveBook]["isbn"]);
                        echo " at " . date("l, d-M-Y") . "\nand you must to get back the book on "  . date("l, d-M-Y", time()+60*60*24*14);
                        echo "\n##############################################################\n\n";
                        // check
                        // print_r($library->bookList);
                        unset($library->bookList[$saveBook]);
                        // print_r($library->bookList);
                        while (true) {
                            echo "Do you want to finish (case sensitive: Y / N ) ? ";
                            $finish = trim(fgets(STDIN));
                            if ( $finish == "Y") {
                                die;
                            } elseif ($finish == "N") {
                                echo "\n\n\n";
                                break;
                            } else {
                                echo "Your input is wrong, write Y/N\n\n";
                            }
                        }
                } elseif ( $saveBook == 3 ) {
                    echo "\n##############################################################\n";
                        echo "You get a book, ";
                        print_r($library->bookList[$saveBook]["name"]);
                        echo "\n";
                        print_r($library->bookList[$saveBook]["isbn"]);
                        echo " at " . date("l, d-M-Y") . "\nand you must to get back the book on "  . date("l, d-M-Y", time()+60*60*24*14);
                        echo "\n##############################################################\n\n";
                        // check
                        // print_r($library->bookList);
                        unset($library->bookList[$saveBook]);
                        // print_r($library->bookList);
                        while (true) {
                            echo "Do you want to finish (case sensitive: Y / N ) ? ";
                            $finish = trim(fgets(STDIN));
                            if ( $finish == "Y") {
                                die;
                            } elseif ($finish == "N") {
                                echo "\n\n\n";
                                break;
                            } else {
                                echo "Your input is wrong, write Y/N\n\n";
                            }
                        }
                } elseif ( $saveBook == 4 ) {
                    echo "\n##############################################################\n";
                        echo "You get a book, ";
                        print_r($library->bookList[$saveBook]["name"]);
                        echo "\n";
                        print_r($library->bookList[$saveBook]["isbn"]);
                        echo " at " . date("l, d-M-Y") . "\nand you must to get back the book on "  . date("l, d-M-Y", time()+60*60*24*14);
                        echo "\n##############################################################\n\n";
                        // check
                        // print_r($library->bookList);
                        unset($library->bookList[$saveBook]);
                        // print_r($library->bookList);
                        while (true) {
                            echo "Do you want to finish (case sensitive: Y / N ) ? ";
                            $finish = trim(fgets(STDIN));
                            if ( $finish == "Y") {
                                die;
                            } elseif ($finish == "N") {
                                echo "\n\n\n";
                                break;
                            } else {
                                echo "Your input is wrong, write Y/N\n\n";
                            }
                        }
                } else {
                    echo "Error: you must input number following the list";
                }
            }      
        } elseif ( $selectMenu == 2) {
            
        } elseif ( $selectMenu == 3) {
            echo "Let see list of books in my library below\n";
            $library->displayBookList();
            while (true) {
                echo "\n\nDo you want to finish (case sensitive: Y / N ) ? ";
                $finish = trim(fgets(STDIN));
                if ( $finish == "Y") {
                    die;
                } elseif ($finish == "N") {
                    echo "\n\n\n";
                    break;
                } else {
                    echo "Your input is wrong, write Y/N\n\n";
                } 
                echo "\n\n";
            }
        } elseif ( $selectMenu == 4) {
            echo "\n\n";
            die;
        } else {
            echo "!!!!!error, you can only choose the option list above!!!!!\n\n\n";
        }
        print_r($library->bookList);  
}      
    
?>