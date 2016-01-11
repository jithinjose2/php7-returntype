<?php

class Flower {}

function testFunction(Flower $flower, int $a) {
    var_dump($flower);
    var_dump($a);
}

testFunction(new Flower(), 1);
