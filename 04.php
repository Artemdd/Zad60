<?php
/**
 * Created by PhpStorm.
 * User: stud05
 * Date: 28.02.19
 * Time: 9:28
 */

function swap($a, $b)
{
    $c = $a;
    $a = $b;
    $b = $c;

    return [$a, $b];
}

$a = 5;
$b = 8;

swap($a, $b);

print_r($a . "\n" );