<?php

declare(strict_types=1);

class Fruit {
    
    public $name = "compassites";
    // This will throw error
    public function __construct() : array {
        
    }
    
    // This also will generate error
    public function __clone() : array{
        
    }
    
    // Can Add return type declaration to sleep magic function
    public function __sleep() : array {
        return ['name'];
    }
    
}

serialize(new Fruit());