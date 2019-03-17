<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 17/03/2019
 * Time: 06:09
 */

$lines=intval(readline());
$synonyms=[];
for($i=1;$i<=$lines;$i++){
    $word =readline();
    $synonym=readline();
if (!key_exists($word,$synonyms))
    $synonyms[$word] = [];
    $synonyms[$word][]=$synonym;
}

uksort($synonyms, function ($key1,$key2)use ($synonyms){
$countSynonyms1=count($synonyms[$key1]);
$countSynonyms2=count($synonyms[$key2]);
if ($countSynonyms1 == $countSynonyms2){
    return $key1 <=> $key2;
}
return $countSynonyms2 <=> $countSynonyms1;
});

foreach ($synonyms as $word=>$synonym){
    echo $word." - ".implode(", ",$synonym).PHP_EOL;
}