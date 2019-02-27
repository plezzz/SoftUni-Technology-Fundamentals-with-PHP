<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 23/02/2019
 * Time: 20:58
 */
$array = explode(" ", readline());

while (true) {
    $command = readline();
    if ($command == "3:1") {
        break;
    }
    $token = explode(" ", $command);
    switch ($token[0]) {
        case "merge":
            {
                $merge = "";
                $start = $token[1];
                $end = $token[2];

                if ($start < 0) {
                    $start = 0;
                }
                if ($start > count($array)) {
                    continue;
                }
                if ($end > count($array)) {
                    $end = count($array) - 1;
                }
                if ($end < 0) {
                    continue;
                }

                for ($i = $start; $i <= $end; $i++) {
                    $merge .= $array[$i];
                }
                if ($start == 0) {
                    $end += 1;
                }
                $temp = array_splice($array, $start, $end, $merge);
            }
            break;
        case "divide":
            {
                $word = $array[$token[1]];
                $parts = strlen($word) / $token[2];
                $divide = str_split($array[$token[1]], $parts);
                if (is_int($parts)){
                }else{
                    $last=array_pop($divide);
                    $penult=array_pop($divide);
                    $divide[]=$penult.$last;
                }
                array_splice($array, $token[1], 1, $divide);
            }
            break;
    }
}
echo implode(" ", $array);
