<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 22/02/2019
 * Time: 17:11
 */

$array =array_map("intval", explode(" ", readline()));
$result=[];
for($i=0;$i<count($array);$i++){
    $first=array_shift($array);
    $last=array_pop($array);
    $result[]=$first+$last;
    $i=-1;
}
echo implode(" ",$result);