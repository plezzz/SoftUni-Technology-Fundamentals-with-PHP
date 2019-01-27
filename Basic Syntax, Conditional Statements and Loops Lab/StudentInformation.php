<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 26/01/2019
 * Time: 13:21
 */
$name=strval(readline());
$age=intval(readline());
$grade=doubleval(readline());


printf("Name: $name, Age: $age, Grade: %.2f",$grade);