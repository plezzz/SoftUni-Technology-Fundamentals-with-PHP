<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 25/01/2019
 * Time: 17:09
 */

$username = strval(readline());
$correctPassword = strrev($username);
$attempt=0;
while (true){
    $password = strval(readline());
    $attempt++;
    if($password==$correctPassword){
       echo "User $username logged in.";
       break;
    }
    if($attempt == 4){
        echo "User $username blocked!";
        break;
    }
    echo "Incorrect password. Try again.".PHP_EOL;
}