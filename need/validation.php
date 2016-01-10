<?php

class User{}

/**
 * @return User - Retrun user object
 **/
function getUser(){
    return 1;
}

$user = getUser();
if(is_object($user)){
    
}