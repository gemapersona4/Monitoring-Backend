<?php

class hewan{
    public static $kambing = 'Kambing memakan rumput'; //membuat vaiable static

    public static function singa(){ //membuat function static
        echo 'Singan Mengaung';
    }

}

hewan::singa(); //menggunakan function static
echo hewan::$kambing; //menggunakan varibale static

?>


