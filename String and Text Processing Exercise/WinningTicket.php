<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 25/03/2019
 * Time: 15:18
 */


$tickets = array_filter(explode(", ", readline()));
foreach ($tickets as $ticket) {
    $ticket = trim($ticket);
    $ticketLength = strlen($ticket);
    if ($ticketLength == 20) {
        $jackpot = '/[$]{20}|[\^]{20}|[#]{20}|[@]{20}/';
        if (preg_match($jackpot, $ticket)) {
            $char = $ticket[0];
            echo "ticket \"$ticket\" - 10$char Jackpot!\n";
        } else {
            $winning = '/[$]{6,10}|[\^]{6,10}|[#]{6,10}|[@]{6,10}/';
            if (preg_match($winning, $ticket)) {
                $win = [];
                $left = substr($ticket, 0, 10);
                $right = substr($ticket, 10, 20);
                preg_match($winning, $left, $winL);
                preg_match($winning, $right, $winR);
                if ($winL[0][0]!=$winR[0][0])
                    echo "ticket \"$ticket\" - no match\n";
                else {
                    $min = Min($winL[0], $winR[0]);
                    $count = strlen($min);
                    $char = $min[0];
                    echo "ticket \"$ticket\" - $count$char\n";
                }
            } else {
                echo "ticket \"$ticket\" - no match\n";
            }
        }
    } else
        echo "invalid ticket\n";
}
