<?php

namespace BangunDatar;
class Persegi {
    public $side;

    public function luasPersegi($side) {
        $this->side = $side;
        return $side**2;
    } 
}