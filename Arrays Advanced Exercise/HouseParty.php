<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 23/02/2019
 * Time: 18:18
 */
$row=readline();
$arr=[];
for($i=1;$i<=$row;$i++){
    $token=explode(" ", readline());
    if ($token[2]=="going!"){
        if(in_array($token[0],$arr)){
            echo $token[0]." is already in the list!".PHP_EOL;
        }else{
            $arr[]=$token[0];
        }
    }else{
        if(in_array($token[0],$arr)){
            $key=array_search($token[0],$arr);
            unset($arr[$key]);
        }else{
            echo $token[0]." is not in the list!".PHP_EOL;
        }
    }

}
echo implode("\n",$arr);