<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 17/03/2019
 * Time: 10:50
 */


$materials = ["need" => ['shards'=>0,'fragments'=>0,'motes'=>0], "junk" => []];
$stop = false;
while (!$stop) {
    $input = explode(" ", readline());
    for ($i = 0; $i < count($input); $i += 2) {
        $material = strtolower($input[$i + 1]);
        $quantity = $input[$i];

        if ($material == 'shards' || $material == 'fragments' || $material == 'motes') {
            if (key_exists($material, $materials["need"]))
                $materials["need"][$material] += $quantity;
            else
                $materials["need"][$material] = $quantity;
        } else {
            if (key_exists($material, $materials["junk"]))
                $materials["junk"][$material] += $quantity;
            else
                $materials["junk"][$material] = $quantity;
        }
        if (key_exists("shards", $materials["need"])) {
            if ($materials["need"]["shards"] >= 250) {
                $materials["need"]["shards"] -= 250;
                echo "Shadowmourne obtained!\n";
                $stop = true;
                break;
            }
        }
        if (key_exists("fragments", $materials["need"])) {
            if ($materials["need"]["fragments"] >= 250) {
                $materials["need"]["fragments"] -= 250;
                echo "Valanyr obtained!\n";
                $stop = true;
                break;
            }
        }
        if (key_exists("motes", $materials["need"])) {
            if ($materials["need"]["motes"] >= 250) {
                $materials["need"]["motes"] -= 250;
                echo "Dragonwrath obtained!\n";
                $stop = true;
                break;
            }
        }

    }
}
uasort($materials["need"], function ($keyOne, $keyTwo) {
    return $keyTwo <=> $keyOne;
});
uksort($materials["need"],function ($materialOne,$materialTwo)use ($materials){
    $score1 = $materials["need"][$materialOne];
    $score2 = $materials["need"][$materialTwo];
    if($score1===$score2){
        return $materialOne<=>$materialTwo;
    }
    return $score2<=>$score1;
});
foreach ($materials['need'] as $material => $quantity) {
    echo $material . ": " . $quantity . PHP_EOL;
}
if (key_exists("junk", $materials)) {
    uksort($materials["junk"], function ($keyOne, $keyTwo) {
        return $keyOne <=> $keyTwo;
    });
    foreach ($materials['junk'] as $material => $quantity) {
        echo $material . ": " . $quantity . PHP_EOL;
    }
}