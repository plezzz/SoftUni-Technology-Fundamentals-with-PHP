<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 02/03/2019
 * Time: 10:41
 */
$batch = [];
while (true) {
    $input = readline();
    if ($input == "Bake It!") {
        break;
    }
    $batch[] = explode("#", $input);
}
$best = [-101];
for ($i = 0; $i < count($batch); $i++) {
    $bestID = array_sum($best);
    $batchID = array_sum($batch[$i]);

    if ($batchID > $bestID) {
        $best = $batch[$i];
    } elseif ($batchID == $bestID) {
        $lengthBest = count($best);
        $lengthBatch = count($batch[$i]);
        $averBest = $bestID / $lengthBest;
        $averBatch = $batchID / $lengthBatch;
        if ($averBatch > $averBest) {
            $best = $batch[$i];
        } elseif ($averBatch == $averBest) {
            if ($lengthBatch < $lengthBest) {
                $best = $batch[$i];
            }
        }
    }
}
$bestID = array_sum($best);
echo "Best Batch quality: $bestID" . PHP_EOL;
echo implode(" ", $best) . PHP_EOL;