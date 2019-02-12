<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 04/02/2019
 * Time: 15:23
 */

$arr = explode(" ", readline());
for($i=0;$i<count($arr);$i++){
    printf("%.2f => %d".PHP_EOL,$arr[$i],round($arr[$i]));
}

