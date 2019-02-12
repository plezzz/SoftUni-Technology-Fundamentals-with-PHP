<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 09/02/2019
 * Time: 19:24
 */


$arr = explode(" ", readline());
$even=0;
for($i=0;$i<count($arr);$i++){
    if ($arr[$i]%2==0){
        $even+=$arr[$i];
    }
}
echo $even;