<?php
/**
 * Created by PhpStorm.
 * User: stud05
 * Date: 28.02.19
 * Time: 11:06
 */

function get($mass, $index, $val = null)
{
    if (count($mass) > $index) {
        return $mass{$index};
    }

    else {
        return $val;
    }
}

$cities = ['moscow', 'london', 'berlin', 'porto'];

var_dump( get($cities, 4, 'Paris') );