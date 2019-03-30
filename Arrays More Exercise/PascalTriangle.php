<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 14/02/2019
 * Time: 16:01
 */


$rows=readline();
for ($y = 1; $y <= $rows; $y ++){
  for ($x = 1; $x <= $y; $x ++){
    if($x == 1){
      $number[$y][$x] = 1; // start with 1
    }elseif($x == $y){
      $number[$y][$x] = 1; // end with 1
    }else{
      $number[$y][$x] = $number[$y-1][$x-1] + $number[$y-1][$x];
    }
  }

}
for($i=1;$i<=count($number);$i++){
  $row=$number[$i];
  echo implode(" ",$row).PHP_EOL;
}