<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 23/02/2019
 * Time: 20:40
 */

$array = array_map("intval", explode(" ", readline()));

while (true){
    $command=readline();
    if ($command=="end"){
        break;
    }
    $token=str_split($command);
    array_splice($array,$token[0],0,$command);

}
echo implode(" ", $array);