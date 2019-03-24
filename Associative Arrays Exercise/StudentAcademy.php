<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 17/03/2019
 * Time: 06:46
 */

$lines=intval(readline());
$students=[];
for($i=1;$i<=$lines;$i++){
    $student =readline();
    $grade=readline();
    if (!key_exists($student,$students))
        $students[$student] = [];
    $students[$student][]=$grade;
}
$studentsAv=[];
foreach ($students as $student=> $grade){
    $averageGrade=array_sum($grade)/count($grade);
    if ($averageGrade>=4.5)
        $studentsAv[$student]=$averageGrade;
}
uasort($studentsAv,function ($keyOne,$keyTwo){
    return $keyTwo<=>$keyOne;
});
foreach ($studentsAv as $student=>$average){
    printf("$student -> %.2f\n",$average);
}