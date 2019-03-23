<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 23/03/2019
 * Time: 11:58
 */

$words=explode(" ",readline());

foreach ($words as $word){
    $count =strlen($word);
    echo str_repeat($word,$count);
}
