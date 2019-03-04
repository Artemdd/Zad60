<?php
/**
 * Created by PhpStorm.
 * User: stud05
 * Date: 04.03.19
 * Time: 16:41
 */

function getSameCount($mass1, $mass2)
{
    $BoxNumber = array_intersect($mass1, $mass2);
    $BoxNumber = array_unique($BoxNumber);

    return count($BoxNumber);
};




print_r(getSameCount([], []));