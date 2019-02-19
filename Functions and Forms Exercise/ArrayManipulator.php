<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 16/02/2019
 * Time: 13:07
 */


$arrayOne = explode(" ", readline());
$input = readline();
while (true) {
    //check for end of program
    if ($input === "end")
        break;
    else
        $arrayTwo = explode(" ", $input);
    // print_r($arrayOne);
    //insert function and index
    $function = $arrayTwo[0];
    $index = $arrayTwo[1];
    //choice function
    switch ($function) {
        case "exchange":
            if ($index < count($arrayOne) && $index >= 0) {
                $arrayOne = exchange($arrayOne, $index);
            } else {
                echo "Invalid index" . PHP_EOL;
            }
            break;
        case "max":
            maxFunc($arrayOne, $index);
            break;
        case "min":
            minFunc($arrayOne, $index);
            break;
        case "first":

            $count = $arrayTwo[1];
            $index = $arrayTwo[2];
            if ($count >= 0 && $count <= count($arrayOne))
                firstFunc($arrayOne, $count, $index);
            else
                echo "Invalid count" . PHP_EOL;
            break;
        case "last":
            $count = $arrayTwo[1];
            $index = $arrayTwo[2];
            if ($count >= 0 && $count <= count($arrayOne))
                lastFunc($arrayOne, $count, $index);
            else
                echo "Invalid count" . PHP_EOL;
            break;
        default:
            echo "No matches" . PHP_EOL;
            break;
    }
    $input = readline();
}
$print = implode(", ", $arrayOne);
echo "[$print]";

//exchange key of array and return
function exchange(array $arrayOne, int $index): array
{
    $arrayTemp = [];
    for ($i = $index + 1; $i < count($arrayOne); $i++) {
        $arrayTemp[] = $arrayOne[$i];
    }
    for ($j = 0; $j <= $index; $j++) {
        $arrayTemp[] = $arrayOne[$j];
    }
    return $arrayTemp;
}

//get max from array even or odd
function maxFunc(array $arr, string $type): void
{
    $result = "No matches";
    $count = count($arr);
    $maxNumb = PHP_INT_MIN;
    if ($type === "even") {
        for ($i = 0; $i < $count; $i++) {
            $current = $arr[$i];
            if ($current % 2 === 0 && $current >= $maxNumb) {
                $maxNumb = $current;
                $result = $i;
            }
        }
    } else if ($type === "odd") {
        for ($i = 0; $i < $count; $i++) {
            $current = $arr[$i];
            if ($current % 2 === 1 && $current >= $maxNumb) {
                $maxNumb = $current;
                $result = $i;
            }
        }
    }
    echo $result . PHP_EOL;
}

function minFunc(array $arr, string $type): void
{
    $result = "No matches";
    $count = count($arr);
    $minNumb = PHP_INT_MAX;
    if ($type === "even") {
        for ($i = 0; $i < $count; $i++) {
            $current = $arr[$i];
            if ($current % 2 === 0 && $current <= $minNumb) {
                $minNumb = $current;
                $result = $i;
            }
        }
    } elseif ($type === "odd") {
        for ($i = 0; $i < $count; $i++) {
            $current = $arr[$i];
            if ($current % 2 === 1 && $current <= $minNumb) {
                $minNumb = $current;
                $result = $i;
            }
        }
    } else {
        echo "No matches";
    }
    echo $result . PHP_EOL;
}

function firstFunc(array $arr, int $number, string $type): void
{
    $tempArray = [];
    $count = count($arr);
    if ($type === "even") {
        for ($i = 0; $i < $count; $i++) {
            $current = $arr[$i];
            if ($current % 2 === 0 && $number > 0) {
                $number--;
                $tempArray[] = $current;
            }
        }
    } elseif ($type === "odd") {
        for ($i = 0; $i < $count; $i++) {
            $current = $arr[$i];
            if ($current % 2 === 1 && $number > 0) {
                $number--;
                $tempArray[] = $current;
            }
        }
    }
    if (count($tempArray) > 0) {
        $print = implode(", ", $tempArray);
        echo "[$print]" . PHP_EOL;
    } else
        echo "[]" . PHP_EOL;
}

function lastFunc(array $arr, int $number, string $type): void
{
    $tempArray = [];
    $count = count($arr);
    if ($type === "even") {
        for ($i = $count-1; $i >=0; $i--) {
            $current = $arr[$i];
            if ($current % 2 === 0 && $number > 0) {
                $number--;
                $tempArray[] = $current;
            }
        }
    } elseif ($type === "odd") {
        for ($i = $count-1; $i >=0; $i--) {
            $current = $arr[$i];
            if ($current % 2 === 1 && $number > 0) {
                $number--;
                $tempArray[] = $current;
            }
        }
    }
    if (count($tempArray) > 0) {
        $print = implode(", ", array_reverse($tempArray));
        echo "[$print]" . PHP_EOL;
    } else
        echo "[]" . PHP_EOL;
}