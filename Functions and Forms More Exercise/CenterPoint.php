<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 17/02/2019
 * Time: 01:01
 */
//d={\sqrt {(x_{2}-x_{1})^{2}+(y_{2}-y_{1})^{2}}}.




findClosestPoint( $x1,  $y1,  $x2,  $y2);

function findClosestPoint( $x1,  $y1,  $x2,  $y2){
         $first = sqrt(pow($y1, 2) + pow($x1, 2));
         $secound = sqrt(pow($y2, 2) + pow($x2, 2));

        if ($first < $secound)
        {
            echo "($x1, $y1)";
        }
        else
        {
            echo "($x2, $y2)";
        }
    }
