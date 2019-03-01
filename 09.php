<?php
/**
 * Created by PhpStorm.
 * User: stud05
 * Date: 01.03.19
 * Time: 14:28
 */

function calculateAverage($mass)
{

    $n = count ($mass);
    if ( $n === 0 )
    { return null; };
    $sred = 0;


    for ($i = 0; $i < $n; $i++)
    {
        $sred += $mass[$i];
    };

    $sred = $sred/$n;
    return $sred;

};


$temperatures = [37.5, 34, 39.3, 40, 38.7, 41.5];

var_dump (calculateAverage($temperatures));