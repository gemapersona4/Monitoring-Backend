<?php

class Lingkaran {
    public $radius;

    public function luasLingkaran($radius) {
        $this->radius = $radius;
        return $radius**2 * pi();
    } 
}