<?php
/**
 * Created by PhpStorm.
 * User: stud05
 * Date: 01.03.19
 * Time: 15:12
 */

function findIndex($mass, $val)
{
    $index = array_search($val, $mass);
    if ($index === false) {
        $index = -1;
    };

    return $index;
};


$temperatures = [37.5, 34, 39.3, 40, 38.7, 41.5, 40];

var_dump( findIndex($temperatures, 40));