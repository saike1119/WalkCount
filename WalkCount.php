<?php
$start = 2;
$goal = 100;
$move = 2;
$count = 0;

printf("ゴールまで歩いた回数は" . walk($start, $goal, $move, $count));

function walk($start, $goal, $move, $count)
{
    while ($start < $goal) {
        $start += $move;
        $count++;
    }
    return $count;
}

