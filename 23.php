<?php
/**
 * Created by PhpStorm.
 * User: stud05
 * Date: 05.03.19
 * Time: 12:16
 */

function pick ($mass, $keys)
{
    $n = count($keys);
    $NewMass = array();

    for ($i = 0; $i < $n; $i++) {

        if ( !is_null($mass[$keys[$i]]) )
        {
            $NewMass[$keys[$i]] = $mass[$keys[$i]];
        };

    };

    return $NewMass;
};


$data = [
    'user' => 'ubuntu',
    'cores' => 4,
    'os' => 'linux'
];

var_dump( pick($data, []) );