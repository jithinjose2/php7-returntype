<?php

// Basic conversion testing


$datas = [
    "int"       => 1,
    "float"     => 1.5,
    "string"    => "4.5",
    "bool"      => true
];

$functions = [
    "int"       => function($var) : int     { return $var; },
    "float"     => function($var) : float   { return $var; },
    "string"    => function($var) : string  { return $var; },
    "bool"      => function($var) : bool    { return $var; }
];


foreach($datas as $data){
    
    echo "\n-----------------";
    echo "Data : ";
    var_dump($data);
    echo "\n";
    
    foreach($functions as $key => $function){
        
        echo "\n";
        echo "Function Return Type : " . $key."\n";
        echo "Returned Value : ";
        var_dump($function($data));
        
    }
    
}