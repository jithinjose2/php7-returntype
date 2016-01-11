<?php

declare(strict_types=1);

interface Fruit{
    function getColor() : string;
    function getWeight();
}

class Apple implements Fruit {
    function getColor() : string {}
    function getWeight() : int {}
}