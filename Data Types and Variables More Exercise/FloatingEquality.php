<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 03/02/2019
 * Time: 19:44
 */
$a =readline();
$b =readline();
$compareVariable=0.000001;
        $equal =Abs($a - $b);
        if ($equal<$compareVariable)
        {
            echo "True";
        }
        else
        {
            echo "False";
        }