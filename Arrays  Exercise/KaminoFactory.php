<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 12/02/2019
 * Time: 18:01
 */

$sumOfOnes = 0;
$position = array();
$sample = 0;

$bestDnaSum = 0;
$bestDnaSample = 0;
$longestDnaSequence = 1;
$bestDna = array();


$lengthOfDna = readline();
$input = readline();
$bestDnaStartPosition = $lengthOfDna - 1;

while ($input != "Clone them!") {
    $sample++;
    $sequence = explodeInput($input);
    $sumOfOnes = sumOfOnes($sequence);
    $position = bestSequence($sequence);//longestSequence, bestStartPosition
    //echo "LongestSequence = $position[0], BestStartPosition =  $position[1], Sum = $sumOfOnes" . PHP_EOL;

    if ($position[0] > $longestDnaSequence) {
        $bestDna = $sequence;
        $bestDnaSum = $sumOfOnes;
        $bestDnaSample = $sample;
        $bestDnaStartPosition = $position[1];
        $longestDnaSequence=$position[0];
    } elseif ($position[0] == $longestDnaSequence
        && $position[1] < $bestDnaStartPosition) {
        $bestDna = $sequence;
        $bestDnaSum = $sumOfOnes;
        $bestDnaSample = $sample;
        $bestDnaStartPosition = $position[1];
        $longestDnaSequence=$position[0];
    } elseif ($position[0] == $longestDnaSequence
        && $position[1] == $bestDnaStartPosition
        && $sumOfOnes > $bestDnaSum) {
        $bestDna = $sequence;
        $bestDnaSum = $sumOfOnes;
        $bestDnaSample = $sample;
        $bestDnaStartPosition = $position[1];
        $longestDnaSequence=$position[0];
    }
    //echo "LongestDNASequence = $longestDnaSequence, BestDNAStartPosition = $bestDnaStartPosition, BestDNASum = $bestDnaSum" . PHP_EOL;
    //var_dump($bestDna);

    $input = readline();
}
echo "Best DNA sample $bestDnaSample with sum: $bestDnaSum." . PHP_EOL;
foreach ($bestDna as $value) {
    echo "$value ";
}


function bestSequence($numbers)
{
    $result = array();
    $sequence = 1;
    $longestSequence = 1;
    $startPosition = 0;
    $bestStartPosition = 0;

    for ($i = 0; $i < count($numbers); $i++) {

        $currentSymbol = $numbers[$i];

        for ($j = $i + 1; $j < count($numbers); $j++) {
            if ($currentSymbol == $numbers[$j] && $currentSymbol==1) {
                $sequence++;

                if ($sequence > $longestSequence) {
                    $longestSequence = $sequence;
                    $bestStartPosition = $startPosition;
                }
            } else {
                $sequence = 1;
                $startPosition = $j;
                break;
            }
        }
        $sequence = 1;
    }
    $result[] = $longestSequence;
    $result[] = $bestStartPosition;

    return $result;

}

function explodeInput($input)
{
    $sequence = array();

    for ($i = 0; $i < strlen($input); $i++) {

        if ($input[$i] == "1" || $input[$i] == "0") {
            $sequence[] = $input[$i];
        }
    }
    return $sequence;
}

function sumOfOnes($sequence)
{
    $sum = 0;

    foreach ($sequence as $value) {

        if ($value == 1) {
            $sum++;
        }
    }
    return $sum;
}
