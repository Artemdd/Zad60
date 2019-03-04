<?php
/**
 * Created by PhpStorm.
 * User: stud05
 * Date: 04.03.19
 * Time: 17:12
 */

function checkIfBalanced($str)
{
    $numb1 = substr_count($str,'(');
    $numb2 = substr_count($str,')');

    if ($numb1 === $numb2) {
        return true;    };

    return false;
};


var_dump(checkIfBalanced('((4 + 3)))'));