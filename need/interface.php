<?php

declare(strict_types=1);

interface Product {
    static function getPrice():float ;  
}

class Pen implements Product {
    static function getPrice():float {
        return [];
    }
}

var_dump(Pen::getPrice());