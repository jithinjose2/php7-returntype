<?php

declare(strict_types=1);

class Apple {
    
    function getMyApple() : self {
        return new Apple();
    }
    
}

$apple = new Apple();
var_dump($apple->getMyApple());



// This will fail
function thisFunctionWillFail() : self {
    
}


var_dump(thisFunctionWillFail());