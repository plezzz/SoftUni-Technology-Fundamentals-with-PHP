<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 09/02/2019
 * Time: 19:36
 */
$arr = explode(" ", readline());
$even=0;
$odd=0;
for($i=0;$i<count($arr);$i++){
    if ($arr[$i]%2==0){
        $even+=$arr[$i];
    }else{
        $odd+=$arr[$i];
    }
}
echo $even-$odd;