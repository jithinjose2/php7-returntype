<?php

declare(strict_types=1);

interface Fruit {}

class Apple implements Fruit{}

function getBestFruit() :  Fruit {
    return new Apple();
}

var_dump(getBestFruit());