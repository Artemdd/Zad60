<?php
/**
 * Created by PhpStorm.
 * User: stud05
 * Date: 07.03.19
 * Time: 10:02
 */

function wordsCount($str)
{
    if ( empty($str) )
    { return null; };

    $mass = explode(' ',$str);
    $WordMass = array();

    $n = count($mass);

    for ( $i = 0; $i < $n; $i++ ) {

        if ( !empty($mass[$i])  ) {

            if ( empty($WordMass[$mass[$i]]) ) {

                $WordMass[$mass[$i]] = 1;
            }

            else {

                $WordMass[$mass[$i]]++;
            };

        };

    };

    return $WordMass;
};

//$mass = wordsCount('g g g one one one one  people go go in down! raven  flyyyy');


//print_r($mass);
