<?php

// echo "\nPOLA TEMPLATE\n";
// for ( $i = 1; $i <= 9; $i++ ) {
//     for ( $j = 1; $j <= 9; $j++ ) {
//         echo $i . $j . " ";
//     } echo "\n";
// }

// echo "\nPOLA 1\n";
// for ( $i = 1; $i <= 9; $i++ ) {
//     for ( $j = 1; $j <= 9; $j++ ) {
//         if ( $i == $j ) {
//             echo " * ";
//         } else {
//             echo "   ";
//         }
//     } echo "\n";
// }


// echo "\n\nPOLA 2\n";
// for ( $i = 1; $i <= 9; $i++ ) {
//     for ( $j = 1; $j <= 9; $j++ ) {
//         if ( $i + $j == 10 ) { /* ( 10 - $i == $j ) */
//             echo " * ";
//         } else {
//             echo "   ";
//         }
//     } echo "\n";
// }

// echo "\n\nPOLA 3\n";
// for ( $i = 1; $i <= 9; $i++ ) {
//     for ( $j = 1; $j <= 9; $j++ ) {
//         if ( $i + $j == 10 || $i == $j) { /* ( 10 - $i == $j ) */
//             echo " * ";
//         } else {
//             echo "   ";
//         }
//     } echo "\n";
// }


// echo "\n\nPOLA 4\n";
// for ( $i = 1; $i <= 9; $i++ ) {
//     for ( $j = 1; $j <= 9; $j++ ) {
//         if ( $i + $j == 10 || $i == $j || $i == 5 || $j == 5 ) { /* ( 10 - $i == $j ) */
//             echo " * ";
//         } else {
//             echo "   ";
//         }
//     } echo "\n";
// }

// echo "\n\nPOLA 5\n";
// for ( $i = 1; $i <= 9; $i++ ) {
//     for ( $j = 1; $j <= 9; $j++ ) {
//         if ( $i >= $j ) {
//             echo " * ";
//         } else {
//             echo "   ";
//         }
//     } echo "\n";
// }

// echo "\n\nPOLA 6\n";
// for ( $i = 1; $i <= 9; $i++ ) {
//     for ( $j = 1; $j <= 9; $j++ ) {
//         if ( $i + $j >= 10 ) {
//             echo " * ";
//         } else {
//             echo "   ";
//         }
//     } echo "\n";
// }

// echo "\n\nPOLA 7\n";
// for ( $i = 1; $i <= 9; $i++ ) {
//     for ( $j = 1; $j <= 9; $j++ ) {
//         if ( $i >= $j && $i + $j >= 10 || $i + $j <= 10 && $i <= $j ) {
//             echo " * ";
//         } else {
//             echo "   ";
//         }
//     } echo "\n";
// }

// echo "\n\nPOLA 8\n";
// for ( $i = 1; $i <= 9; $i++ ) {
//     for ( $j = 1; $j <= 9; $j++ ) {
//         if ( $i >= $j && $i + $j <=10 || $i + $j >= 10 && $i <= $j ) {
//             echo " * ";
//         } else {
//             echo "   ";
//         }
//     } echo "\n";
// }



// echo "\nPOLA 1.1\n";
// // $a = 1;
// for ( $i = 1; $i <= 9; $i++ ) {
//     for ( $j = 1; $j <= 9; $j++ ) {
//         if ( $j == $i ) {
//             echo " " . $i*2-1 . " "; /*atau bisa pake variabel*/
//         } else {
//             echo "  ";
//         } 
//     }  echo "\n";
// }

// echo "\nPOLA 1.2\n";

// for ( $i = 1; $i <= 9; $i++ ) {
//     for ( $j = 1; $j <= 9; $j++ ) {
//         if ( $i + $j == 10 ) {
//             echo " " . $j*2-2 . " ";
//             // $b-=2;
//         } else {
//             echo "   ";
//         } 
//     }  echo "\n";
// }

// echo "\nPOLA 1.2 (bisa pake cara ini juga)\n";
// $b = 16;
// for ( $i = 9; $i >= 0; $i-- ) {
//     for ( $j = 1; $j <= 9; $j++ ) {
//         if ( $i == $j ) {
//             echo " " . $b . " ";
//             $b-=2;
//         } else {
//             echo "   ";
//         } 
//     }  echo "\n";
// }

// echo "\nPOLA 1.3\n";
// // $a = 1;
// for ( $i = 1; $i <= 9; $i++ ) {
//     for ( $j = 1; $j <= 9; $j++ ) {
//         if ( $i == $j ) {
//             echo " " . $i*2-1 . " ";
//             // $a+=2;
//         } elseif ( $i + $j == 10 ) {
//             echo " " . $j*2-2 . " ";
//         } else {
//             echo "   ";
//         }
//     }  echo "\n";
// }

// echo "\nPOLA 1.4\n";
// for ( $i = 1; $i <= 9; $i++ ) {
//     for ( $j = 1; $j <= 9; $j++ ) {
//         if ( $i == $j ) {
//             echo " " . $i*2-1 . " ";
//         } elseif ( $i + $j == 10 ) {
//             echo " " . $j*2-2 . " ";
//         } elseif ( $i == 5 ) {
//             echo " " . $j*2-1 . " ";
//         } elseif ( $j == 5 ) {
//             echo " " . $i*2-2 . " ";
//         } else {
//             echo "   ";
//         }
//     }  echo "\n";
// }

// echo "\nPOLA 1.5\n";
// for ( $i = 1; $i <= 9; $i++ ) {
//     for ( $j = 1; $j <= 9; $j++ ) {
//         if ( $i >= $j ) {
//             echo " " . $i*2-1 . " ";
//         } else {
//             echo "   ";
//         }
//     }  echo "\n";
// }

// echo "\nPOLA 1.6\n";
// for ( $i = 1; $i <= 9; $i++ ) {
//     for ( $j = 1; $j <= 9; $j++ ) {
//         if ( $i + $j >= 10 ) {
//             echo " " . ((9-$i)*2) . " ";
//         } else {
//             echo "   ";
//         }
//     }  echo "\n";
// }

// echo "\nPOLA 1.7\n";
// for ( $i = 1; $i <= 9; $i++ ) {
//     for ( $j = 1; $j <= 9; $j++ ) {
//         if ( $i == $j ) {
//             echo " " . ($i*2-1) . " ";
//         } elseif ( $i + $j == 10 ) {
//             echo " " . ($j*2-2) . " ";
//         } elseif ( $i < $j && $i + $j < 10 ) {
//             echo " " . "A" . " ";
//         } elseif ( $i > $j && $i + $j > 10 ) {
//             echo " " . "B" . " ";
//         } else {
//             echo "   ";
//         }
//     }  echo "\n";
// }

// echo "\nPOLA 1.8\n";
// for ( $i = 1; $i <= 9; $i++ ) {
//     for ( $j = 1; $j <= 9; $j++ ) {
//         if ( $i == $j ) {
//             echo " " . $i*2-1 . " ";
//         } elseif ( $i + $j == 10 ) {
//             echo " " . $j*2-2 . " ";
//         } elseif ( $i > $j && $i + $j < 10) {
//             echo " A ";
//         } elseif ( $i < $j && $i + $j > 10) {
//             echo " B ";
//         } else {
//             echo "  ";
//         }
//     } echo "\n";
// }


?>
