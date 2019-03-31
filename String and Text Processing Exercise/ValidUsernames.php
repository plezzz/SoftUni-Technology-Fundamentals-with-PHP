<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 23/03/2019
 * Time: 14:12
 */

$userNames=explode(", ",readline());


foreach ($userNames as $userName){
    $pattern = '/([a-zA-Z-_0-9]{3,16})/m';
    $replacement = 'valid';
    $check = preg_replace($pattern, $replacement, $userName);
    if ($check == "valid"){
        echo $userName.PHP_EOL;
    }
}