<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 13/02/2019
 * Time: 16:08
 */

$enters = readline();
$vowelsArr = explode(" ", "a A e E i I o O u U");

for ($i = 0; $i < $enters; $i++) {
    $name[$i] = readline();
}

for ($i = 0; $i < count($name); $i++) {
    $pass = str_split($name[$i]);
    $sum=0;
    for ($j = 0; $j < count($pass); $j++) {
        if (in_array($pass[$j], $vowelsArr)) {
            $num = ord($pass[$j]);
            $sum += intval($num * count($pass));
        } else {
            $num = ord($pass[$j]);
            $sum +=intval($num / count($pass));
        }
    }
    $encrypt[]=$sum;
}
sort($encrypt);
for($i=0;$i<count($encrypt);$i++){
    echo $encrypt[$i].PHP_EOL;
}















/*

for ($i = 0; $i < $input; $i++) {
    $letters = explode(" ", readline());

    $sum = 0;
    for ($j = 0; $j < count($letters); $j++) {
        $currentChar = $letters[$j];
        if (in_array($currentChar, $vowelsArr)) {
            $sum += ord($j) * count($letters);
            echo $sum.PHP_EOL;
        } else {
            $sum += ord($j) / count($letters);
            echo $sum.PHP_EOL;
        }
    }
    $numbers[$i] = $sum;
}

Sort($numbers);

foreach ($numbers as $element) {
    echo $element;
}*/
