<?php
/**
 * Created by PhpStorm.
 * User: stud05
 * Date: 01.03.19
 * Time: 15:25
 */

function getSameParity($mass)
{
    if( empty($mass)) {
        return $mass; };

    $ost = $mass[0] % 2;
    $NewMass = array($mass[0]);

    for ($i = 1; $i < count($mass); $i++ ) {
        if ($mass[$i] % 2 === $ost)
        { $NewMass[] = $mass[$i]; };
    };

    return $NewMass;
};


print_r(getSameParity([2, 2, 3, 4 , 5 , 10]));