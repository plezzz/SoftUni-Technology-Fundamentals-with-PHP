<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 14/02/2019
 * Time: 23:30
 */

$grade = readline();
function checkGrade($grade)
{
    $answer = "";
    if ($grade >= 2.00 && $grade <= 2.99) {
        $answer = floor($grade);
/*    } elseif ($grade >= 5.50 && $grade <= 6.00) {
        $answer = floor($grade);*/
    } elseif ($grade >= doubleval(strval(floor($grade)) . ".00") && $grade <= doubleval(strval(floor($grade)) . ".49")) {
        $answer = floor($grade);
    } elseif ($grade >= doubleval(strval(floor($grade)) . ".50") && $grade <= doubleval(strval(floor($grade)) . ".99")) {
        $answer = floor($grade) + 1;
    }
    return $answer;
}
switch (checkGrade($grade)){
    case 2: echo "Fail";break;
    case 3: echo "Poor";break;
    case 4: echo "Good";break;
    case 5: echo "Very good";break;
    case 6: echo "Excellent";break;
}