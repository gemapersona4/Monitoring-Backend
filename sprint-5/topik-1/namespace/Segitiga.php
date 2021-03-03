<?php
namespace Segitiga;

class Segitiga {
    public $base;
    public $height;

    public function luasSegitiga($base, $height) {
        $this->base = $base;
        $this->height = $height;
        return $base * $height / 2;
    } 
}