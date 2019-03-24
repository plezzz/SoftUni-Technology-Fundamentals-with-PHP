<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 17/03/2019
 * Time: 07:10
 */

$courses=[];
while (true){
    $input=readline();
    if ($input=="end")
        break;
    $token=explode(" : ",$input);
    list($course, $student)=$token;

    if (!key_exists($course,$courses))
        $courses[$course][]=$student;
    else
    $courses[$course][]=$student;

}
//print_r($courses);
uasort($courses,function ($keyOne,$keyTwo){
    $keyOne=count($keyOne);
    $keyTwo=count($keyTwo);
    return $keyTwo <=> $keyOne;
});
foreach ($courses as $course=>$students){
    uasort($students,function ($keyOne,$keyTwo){
        return $keyOne <=> $keyTwo;
    });
    echo $course.": ".count($students).PHP_EOL;
    echo "-- ".implode("\n-- ",$students).PHP_EOL;
}