<?php

$lesson = explode(", ", readline());

while (true) {
    $command = readline();
    if ($command == "course start") {
        break;
    }
    $token = explode(":", $command);
    switch ($token[0]) {
        case "Add":
            {
                if (in_array($token[1], $lesson)) {
                } else {
                    $lesson[] = $token[1];
                }
            }
            break;
        case "Insert":
            {
                if (in_array($token[1], $lesson)) {
                } else {
                    array_splice($lesson, $token[2], 0, $token[1]);
                }
            }
            break;
        case "Remove":
            {
                if (in_array($token[1], $lesson)) {
                    $key = array_search($token[1], $lesson);
                    array_splice($lesson, $key, 1);
                }
            }
            break;
        case "Swap":
            {
                if (in_array($token[1], $lesson)) {
                    if (in_array($token[2], $lesson)) {
                        swap($token[1], $token[2], $lesson);
                    }
                }
                if (in_array($token[1] . "-Exercise", $lesson)) {
                    swapExercise($token[1], $lesson);
                }
                if (in_array($token[2] . "-Exercise", $lesson)) {
                    swapExercise($token[2], $lesson);
                }
            }
            break;
        case "Exercise":
            {
                if (in_array($token[1], $lesson)) {
                    if (in_array($token[1] . "-Exercise", $lesson)) {
                    } else {
                        $keyExercise = array_search($token[1], $lesson);
                        $exercise = $token[1] . "-Exercise";
                        array_splice($lesson, $keyExercise + 1, 0, $exercise);
                    }
                } else {
                    $lesson[] = $token[1];
                    $lesson[] = $token[1] . "-Exercise";
                }
            }
            break;
    }
}
foreach ($lesson as $keyLesson => $value) {
    echo $keyLesson + 1 . "." . $lesson[$keyLesson] . PHP_EOL;
}
function swap(string $tokenOne, string $tokenTwo, array &$lesson)
{
    $keyOne = array_search($tokenOne, $lesson);
    $keyTwo = array_search($tokenTwo, $lesson);
    $temp = $lesson[$keyOne];
    array_splice($lesson, $keyOne, 1, $lesson[$keyTwo]);
    array_splice($lesson, $keyTwo, 1, $temp);
    return $lesson;
}

function swapExercise(string $tokenOne, array &$lesson)
{
    $keyExercise = array_search($tokenOne . "-Exercise", $lesson);
    $keyLesson = array_search($tokenOne, $lesson);
    array_splice($lesson, $keyExercise, 1);
    array_splice($lesson, $keyLesson + 1, 0, $tokenOne . "-Exercise");
    return $lesson;
}