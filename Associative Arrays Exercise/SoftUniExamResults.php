<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 18/03/2019
 * Time: 13:41
 */

$students = [];
$submissions = [];
while (true) {
    $input = readline();
    if ($input == "exam finished")
        break;
    list($student, $technology, $score) = array_pad(explode("-", $input), 3, null);
    if ($technology != "banned") {
        if (!key_exists($technology, $submissions))
            $submissions[$technology] = 0;
        $submissions[$technology]++;
        if (!key_exists($student, $students))
            $students[$student] = $score;
        else{
            if ($students[$student]<$score)
                $students[$student] = $score;
        }
    }else{
        unset($students[$student]);
    }
}
uksort($students,function ($student1,$student2)use ($students){
    $score1 = $students[$student1];
    $score2 = $students[$student2];
   if($score1===$score2){
   return $student1<=>$student2;
   }
   return $score2<=>$score1;
});

uksort($submissions,function ($tech1,$tech2)use ($submissions){
    $score1 = $submissions[$tech1];
    $score2 = $submissions[$tech2];
    if($score1===$score2){
        return $tech1<=>$tech2;
    }
    return $score2<=>$score1;
});
echo "Results:\n";
foreach ($students as $student => $score){
echo $student." | ".$score.PHP_EOL;
}
echo "Submissions:\n";
foreach ($submissions as $tech => $count){
    echo $tech." - ".$count.PHP_EOL;
}