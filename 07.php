<?php
/**
 * Created by PhpStorm.
 * User: stud05
 * Date: 01.03.19
 * Time: 14:20
 */

function addPrefix($mass, $pref)
{
    $n = count($mass);
    $i = 0;

    for ($i ; $i < $n; $i++) {
        $mass[$i] = $pref . ' ' . $mass[$i];

    };

    return $mass;
};


$names = ['john', 'smith', 'karl'];

$newNames = addPrefix($names, 'Mr');
print_r($newNames);