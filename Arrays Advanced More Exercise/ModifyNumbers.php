<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 24/02/2019
 * Time: 16:25
 */
$arr = array_map("intval", explode(" ", readline()));
while (true) {
    $command = readline();
    if ($command == "end") {
        break;
    }
    $token = explode(" ", $command);
    switch ($token[0]) {
        case "swap":
            {
                $temp = array_splice($arr, $token[1], 1, $arr[$token[2]]);
                array_splice($arr, $token[2], 1, $temp);
            }
            break;
        case "multiply":
            {
                $result=$arr[$token[1]]*$arr[$token[2]];
                array_splice($arr,$token[1],1,$result);
            }
            break;
        case "decrease":
            {
                for($i=0;$i<count($arr);$i++){
                    $arr[$i]-=$token[1];
                }
                /*foreach ($arr as $key=>$value){
                    $decrease=$token[1];
                    $value=$value-$decrease;
                }*/
            }
            break;
        case "increase":
            {
                for($i=0;$i<count($arr);$i++){
                    $arr[$i]+=$token[1];
                }
            }
            break;
        case "remove":
            {
                array_splice($arr, $token[1], 1);
            }
            break;
    }
}
echo implode(", ", $arr);