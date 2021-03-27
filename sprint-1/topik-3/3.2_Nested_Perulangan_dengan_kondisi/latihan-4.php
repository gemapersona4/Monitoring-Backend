<?php

$n = 9;
$a = 1;

for ($i=1; $i<=$n; $i++){
    for ($j=1; $j<=$n; $j++){
        if ($j == $i) {    
            echo " " . $a . " ";
            $a+=2;
        } else {
             echo " - ";
        }
    }
    echo "\n"; 
}


?>