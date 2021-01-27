<?php

$n = 9;

for ($i=1; $i<=$n; $i++){
    for ($j=1; $j<=$n; $j++){
        if ($i+$j==10) {
            echo " + ";
        } else {
            echo " - ";
        }
    }
    echo "\n"; 
}


?>