<?php

// بِسْمِ اللَّهِ الرَّحْمَنِ الرَّحِيم 
// ٱلْحَمْدُ لِلَّٰهِ رَبِّ ٱلْعَالَمِينَ
// أَشْهَدُ أَنْ لَا إِلَهَ إِلَّا اللهُ وَأَشْهَدُ أَنَّ مُحَمَّدًا رَسُوْلُ اللهِ
// اللَّهُمَّ صَلِّ عَلَى مُحَمَّدٍ ، وَعَلَى آلِ مُحَمَّدٍ ، كَمَا صَلَّيْتَ عَلَى إِبْرَاهِيمَ وَعَلَى آلِ إِبْرَاهِيمَ ، إِنَّكَ حَمِيدٌ مَجِيدٌ
//  ، اللَّهُمَّ بَارِكْ عَلَى مُحَمَّدٍ ، وَعَلَى آلِ مُحَمَّدٍ ، كَمَا بَارَكْتَ عَلَى إِبْرَاهِيمَ ، وَعَلَى آلِ إِبْرَاهِيمَ ، إِنَّكَ حَمِيدٌ مَجِيدٌ

// WITH PROCEDURAL PHP
    $students = [ 1 => [1 => "Gema Masse Cipta"],
                      [2 =>"Ahmad Arif Ilahana"],
                      [3 => "Bagus Sonarangga"],
                      [4=> "Shafwan Farizi"]
               ];

// print_r($students);

// TITLE
    echo "\n====================================Student====================================\n";

// USE WHILE FOR LOOP 
    while (true) {
// MAIN_MENU
    echo "\n__________________Main_Menu__________________\n\n";
    echo "     1. New Student\n";
    echo "     2. Edit Student\n";
    echo "     3. Delete Student\n";
    echo "     4. List Student\n";
    echo "\nInput = ";
    $inputMain = trim(fgets(STDIN));
    
// FIRST_CONDITIONALS
    if ( $inputMain == 1 ) {
         echo "\n__________________New_Student__________________\n\n";
         echo "     Name = ";
         $newName = trim(fgets(STDIN));
            if ( empty($newName) == false ) {
                $students[]["5"] = $newName;
                print_r($students);
                echo "==========Done, name has been saved==========\n";  
            }
    } elseif ( $inputMain == 2 ) {
        echo "\n__________________Edit_Student__________________\n\n";
        echo "     List of Students\n";
        echo "     -------------------------\n";
        $i = 1;
            foreach ( $students as $student ) {
                foreach ( $student as $name) {
                    echo "     " . $i++ . ". " . $name . "\n";
            }
        }
        echo "     -------------------------\n";
        echo "     Which want you to edit = ";
        $editName = trim(fgets(STDIN));
        echo "\n+++++++++++++++++++++++++++++++++++++++++++++++++++++\n";
            if ( $editName == 1 ) {
                echo "     Edit Name = ";
                $editName1 = trim(fgets(STDIN));
                $students[1][1] = $editName1;
                print_r($students);
                echo "==========Done, name has been edited==========\n";  
            } elseif ( $editName == 2 ) {
                echo "     Edit Name = ";
                $editName1 = trim(fgets(STDIN));
                $students[2][2] = $editName1;
                print_r($students);
                echo "==========Done, name has been edited==========\n";  
            } elseif ( $editName == 3 ) {
                echo "     Edit Name = ";
                $editName1 = trim(fgets(STDIN));
                $students[3][3] = $editName1;
                print_r($students);
                echo "==========Done, name has been edited==========\n";  
            } elseif ( $editName == 4 ) {
                echo "     Edit Name = ";
                $editName1 = trim(fgets(STDIN));
                $students[4][4] = $editName1;
                print_r($students);
                echo "==========Done, name has been edited==========\n";  
            }  
    } elseif ( $inputMain == 3 ) {
        echo "\n__________________Delete_Student__________________\n\n";
        // $i2 = 1;
            foreach ( $students as $student ) {
                foreach ( $student as $id => $name ) {
                    echo "     " . $id . ". " . $name . "\n";
                }
            }
        echo "\n which want to delete ? ";
        $deleteName = trim(fgets(STDIN));
            if ( $deleteName == 1 ) {
                unset($students[1][1]);
                print_r($students);
                echo "==========Done, name has been deleted==========\n";  
            } elseif ( $deleteName == 2 ) {
                unset($students[2][2]);
                print_r($students);
                echo "==========Done, name has been deleted==========\n";  
            } elseif ( $deleteName == 3 ) {
                unset($students[3][3]);
                print_r($students);
                echo "==========Done, name has been deleted==========\n";  
            } elseif ( $deleteName == 4 ) {
                unset($students[4][4]);
                print_r($students);
                echo "==========Done, name has been deleted==========\n";  
            }
    } elseif ( $inputMain == 4 ) {
        echo "\n__________________List_Student__________________\n\n";
        $i2 = 1;
        foreach ( $students as $student ) {
            foreach ( $student as $name) {
                echo "     " . $i2++ . ". " . $name . "\n";
            }
        }
    } else {

    } 
    
// ENDWHILE ( USE WHILE FOR LOOP )
    echo "\n===============================================================================\n";
    echo "\n===============================================================================\n";
    echo "\n===============================================================================\n";
    }
// END 
    echo "\n===============================================================================\n";
    echo "\n===============================================================================\n";
    echo "\n===============================================================================\n";

?>