<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 15/02/2019
 * Time: 20:25
 */

$password = readline();

function lengthPassword($input)
{
    $counter = 0;
    for ($i = 0; $i <= strlen($input) - 1; $i++) {
        $counter++;
    }
    if ($counter >= 6 && $counter <= 10) {
        return true;
    }
    return false;
}

function consistPassword($input)
{
    $arrayPass = str_split($input);
    $result = false;

    for ($i = 0; $i <= count($arrayPass) - 1; $i++) {
        $toNum = ord($arrayPass[$i]);
        if (($toNum >= 97 && $toNum <= 122) || ($toNum >= 65 && $toNum <= 90) || ($toNum >= 48 && $toNum <= 57)) {
            $result = true;
        } else {
            return false;
        }
    }
    return $result;
}

function digitsPassword($input)
{
    $array = str_split($input);
    $counter = 0;
    for ($i = 0; $i <= count($array) - 1; $i++) {
        $check = ord($array[$i]);
        if ($check >= 48 && $check <= 57) {
            $counter++;
        }
    }
    if ($counter >= 2) {
        return true;
    }
    return false;
}

if (lengthPassword($password) && consistPassword($password) && digitsPassword($password)) {
    echo "Password is valid";
} else {
    if (lengthPassword($password) == false) {
        echo "Password must be between 6 and 10 characters" . PHP_EOL;
    }
    if (consistPassword($password) == false) {
        echo "Password must consist only of letters and digits" . PHP_EOL;
    }
    if (digitsPassword($password) == false) {
        echo "Password must have at least 2 digits" . PHP_EOL;
    }
}