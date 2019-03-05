<?php
/**
 * Created by PhpStorm.
 * User: stud05
 * Date: 05.03.19
 * Time: 12:37
 */

function genDiff($mass1, $mass2)
{
    $n = count($mass1);
    $NewMass = array();

    for ($i = 0; $i < $n; $i++) {
        $key1 = key($mass1);
        $val1 = $mass1[$key1];
        $val2 = $mass2[$key1];

        if ( $val2 === null ) {
            $NewMass[$key1] = 'deleted';
        }

        elseif ( $val1 === $val2 ) {
            $NewMass[$key1] = 'unchanged';
        }

        else {
            $NewMass[$key1] = 'changed';
        };

        next($mass1);
    };


    $AddKeys = array_diff(array_keys($mass2), array_keys($mass1));
    $AddVall = array_fill(0, count($AddKeys), 'added');

    $AddMass = array_combine($AddKeys, $AddVall);

    $NewMass = array_merge($NewMass, $AddMass);


    return $NewMass;
};

print_r( $result = genDiff(
    ['one' => 'eon', 'two' => 'two', 'four' => true],
    ['two' => 'own', 'zero' => 4, 'four' => true, 'five' => 5]
));

