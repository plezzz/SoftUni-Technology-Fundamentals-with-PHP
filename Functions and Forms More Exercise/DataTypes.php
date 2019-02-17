<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 17/02/2019
 * Time: 00:53
 */

$type = readline();
$input=readline();
$type($input);
function int($input){
    echo $input*2;
}
function real($input){
    printf("%.2f",$input*1.5) ;
}
function string($input){
    echo "$$input$";
}