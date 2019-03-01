<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 01/03/2019
 * Time: 20:21
 */
$partySize = readline();
$days = readline();
$budget = 0;

foreach (range(1, $days) as $day) {
    $budget += 50;

    if ($day % 10 == 0) {
        $partySize -= 2;
    }
    if ($day % 15 == 0) {
        $partySize += 5;
    }
    if ($day % 3 == 0) {
        $budget -= $partySize * 3;
    }
    if ($day % 5 == 0) {
        $budget += $partySize * 20;
        if ($day % 3 == 0) {
            $budget -= $partySize * 2;
        }
    }
    $budget -= 2 * $partySize;
}
$budgetPerPerson = floor($budget / $partySize);
echo "$partySize companions received $budgetPerPerson coins each.";