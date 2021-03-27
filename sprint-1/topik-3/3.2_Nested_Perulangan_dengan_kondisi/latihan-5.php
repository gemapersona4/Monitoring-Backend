<?php

$n=9;

for ($i=1; $i<=$n; $i++) {
    for ($j=1; $j<=$n; $j++) {
        if ($i==1 || $i==5 || $i==$n || $i>$j && $i<=4 && $i>1 && $j==1 || $i<$j && $i<=8 && $i>5 && $j==$n) {
            echo " $i.$j||| ";
        } else {
            echo " $i.$j--- ";
        }
    }
    echo "\n";
    
}

?>
