<?php
/**
 * Created by PhpStorm.
 * User: Niki
 * Date: 17/02/2019
 * Time: 21:58
 */

$sequence = explode(" ",readline());

$longestSeq = FindLongestIncreasingSubsequence($sequence);
echo implode(" ", $longestSeq);


function FindLongestIncreasingSubsequence($sequence)
        {
            $maxLength = 0;
            $lastIndex = -1;
            $length[] = count($sequence);
            $prev []= count($sequence);

            for ($index = 0; $index < count($sequence); $index++)
            {
                $length[$index] = 1;
                $prev[$index] = -1;

                for ($i = 0; $i < $index; $i++)
                {
                    if ($sequence[$i] < $sequence[$index] && $length[$i] + 1 > $length[$index])
                    {
                        $length[$index] = $length[$i] + 1;
                        $prev[$index] = $i;
                    }
                }

                if ($length[$index] > $maxLength)
                {
                    $maxLength = $length[$index];
                    $lastIndex = $index;
                }
            }

            $longestMatrix []= $maxLength;
            $currentIndex = $maxLength - 1;

            while ($lastIndex != -1)
            {
                $longestMatrix[$currentIndex] = $sequence[$lastIndex];
                $currentIndex--;
                $lastIndex = $prev[$lastIndex];
            }
            usort($longestMatrix, "cmp");
          //  print_r($longestMatrix);
            return $longestMatrix;
        }


function cmp($a, $b)
{
    if ($a == $b) {
        return 0;
    }
    return ($a < $b) ? -1 : 1;
}