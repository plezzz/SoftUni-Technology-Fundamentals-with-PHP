<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 25/01/2019
 * Time: 17:25
 */
$input = intval(readline());
            $divider = 1;
            $fact=1;
            $sumFact = 0;

            while ($input>=$divider)
            {

                $fact = ($input / $divider) % 10;
                for ($i = $fact - 1; $i >= 1; $i--)
                {
                    $fact = $fact * $i;
                }
                $sumFact = $sumFact + $fact;
                $divider = $divider * 10;
            }

            if ($sumFact==$input)
            {
                echo "yes";
            }
            else
            {
                echo "no";
            }