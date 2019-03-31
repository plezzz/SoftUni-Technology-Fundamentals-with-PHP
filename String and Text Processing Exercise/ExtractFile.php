<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 23/03/2019
 * Time: 15:14
 */


$input=readline();
$file=substr($input,strrpos($input,'\\')+1);

$name=substr($file,0,strrpos($file,'.'));
$type=substr($file,strrpos($file,'.')+1);
echo "File name: $name\nFile extension: $type";