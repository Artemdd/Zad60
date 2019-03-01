<?php
/**
 * Created by PhpStorm.
 * User: stud05
 * Date: 01.03.19
 * Time: 14:23
 */

function swap($mass, $index)
{
    if ($index > 0 && $index < count($mass) - 1)
    {
        $a = $mass[$index - 1];
        $mass[$index - 1] = $mass[$index + 1];
        $mass[$index + 1] = $a;


    };

    return $mass;

};


$names = ['john', 'smith', 'karl', 'rob'];

$result = swap($names, 2);
print_r($result);