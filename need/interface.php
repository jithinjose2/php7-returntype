<?php

interface Product {
    static function getPrice() ;  
}

class Pen implements Product {
    static function getPrice() {
        return false;
    }
}

var_dump(Pen::getPrice());