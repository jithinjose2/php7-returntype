<?php

class User{}

/**
 * @return User - Retrun user object
 **/
function getUser() : User {
    return 1;
}

$user = getUser();
$user->name;