<?php
/**
 * Created by PhpStorm.
 * User: stud05
 * Date: 01.03.19
 * Time: 15:49
 */

function getIndexOfWarmestDay($mass)
{
    if( empty($mass)) { return null; };

    $n = count($mass);
    $MaxVal = max($mass[0]);
    $MaxIndex = 0;

    for ($i = 1; $i < $n; $i++) {

        if ( max($mass[$i]) > $MaxVal ) {
            $MaxVal = max($mass[$i]);
            $MaxIndex = $i;
        };
    };



    return $MaxIndex;
};

$data = [
    [-5, 7, 1],
    [3, 2, 3],
    [-1, -1, 10],
    [3, 6, 13]
];



var_dump(getIndexOfWarmestDay($data));