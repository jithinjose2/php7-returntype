<?php

function testString($a) : string {
    return $a;
}

var_dump(testString(1));

var_dump(testString(2.5));

var_dump(testString("compassites"));

var_dump(testString([1, 2, 3]));