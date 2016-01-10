<?php

interface Product {
    static function getPrice():float ;  
}

class Pen implements Product {
    static function getPrice():float {
        return [];
    }
}

var_dump(Pen::getPrice());