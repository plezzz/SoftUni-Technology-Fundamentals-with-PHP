<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 24/02/2019
 * Time: 19:44
 */
$encrypted = str_split(readline());
$numberList = [];
$nonNumberList = [];
for ($i = 0; $i < count($encrypted); $i++) {
    $sort = ord($encrypted[$i]);
    if ($sort >= 48 && $sort <= 57) {
        $numberList[] = $encrypted[$i];
    } else {
        $nonNumberList[] = $encrypted[$i];
    }
}
$takeList = [];
$skipList = [];
for ($i = 0; $i < count($numberList); $i++) {
    if ($i % 2 == 0) {
        $takeList[] = $numberList[$i];
    } else {
        $skipList[] = $numberList[$i];
    }
}

$message="";
for($i=0;$i<count($takeList);$i++){
    $decrypt = array_splice($nonNumberList,0,$takeList[$i]);
    array_splice($nonNumberList,0,$skipList[$i]);
    $message.=implode("",$decrypt);
}
echo $message;