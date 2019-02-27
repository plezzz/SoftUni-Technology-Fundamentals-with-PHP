<?php
/**
 * Created by PhpStorm.
 * User: niki
 * Date: 2/21/19
 * Time: 9:18 AM
 */
$array = array_map("floatval", explode(" ", readline()));
$tempArray=[];
while (true) {
    $command = explode(" ", readline());
    if ($command[0] === "end")
        break;
    switch ($command[0]) {
        case "Delete":
            for($i=0;$i<count($array);$i++){
                if ($array[$i]==$command[1]) {
                    array_splice($array, $i, 1);
                    $i=-1;
                }
            }
            break;
        case "Insert":
            array_splice($array,$command[2],0,$command[1]);
            break;
        case "Odd":
            {
                for ($i = 0; $i < count($array); $i++) {
                    if ($array[$i] % 2 != 0) {
                        $tempArray[] = $array[$i];
                    }
                }
                echo implode(" ", $tempArray);
                exit();
            }
            break;
        case "Even":
            {
                for ($i = 0; $i < count($array); $i++) {
                    if ($array[$i] % 2 == 0) {
                        $tempArray[] = $array[$i];
                    }
                }
                echo implode(" ", $tempArray);
                exit();
            }
            break;
    }
}