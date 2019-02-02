<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 02/02/2019
 * Time: 19:35
 */
$people=readline();
$capacity=readline();
$courses=ceil( $people/$capacity);
echo $courses;