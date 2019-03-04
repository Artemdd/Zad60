<?php
/**
 * Created by PhpStorm.
 * User: stud05
 * Date: 04.03.19
 * Time: 16:57
 */

function bubbleSort($mass)
{
    $n = floor(count($mass)/2);
    $count = count($mass);

    for ( $i = 0; $i < $n; $i++)
    {
    $a = $mass[$i];
    $mass[$i] = $mass[$count - 1 - $i];
    $mass[$count - 1 - $i] = $a;
    };

    return $mass;
};

print_r (bubbleSort([]));