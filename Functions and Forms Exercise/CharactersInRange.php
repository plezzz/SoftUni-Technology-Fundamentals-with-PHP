<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 15/02/2019
 * Time: 19:40
 */
$charOne = readline();
$charTwo = readline();

printRange($charOne,$charTwo);

function printRange( $charOne,  $charTwo)
{
    for ($i = min(ord($charOne), ord($charTwo)) + 1; $i < max(ord($charOne), ord($charTwo)); $i++) {
        $result = chr($i);
        echo "$result ";
    }
}