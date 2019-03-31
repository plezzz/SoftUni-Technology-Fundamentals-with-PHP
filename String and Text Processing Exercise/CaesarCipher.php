<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 23/03/2019
 * Time: 15:58
 */

$text=readline();
for($i=0;$i<strlen($text);$i++){
    echo chr(ord($text[$i])+3);
}