<?php
/**
 * Created by PhpStorm.
 * User: stud05
 * Date: 01.03.19
 * Time: 15:02
 */

function isContinuousSequence($mass)
{
    $n = count ($mass);
    if ( $n === 0 )
    { return false; };

    for ( $i=0; $i + 1 < $n; $i++ ) {
        if ( $mass[$i] + 1 !== $mass[$i + 1] ) {
            return false;
        };
    };

    return true;
};


var_dump(isContinuousSequence([]) );