<?php
/**
 * Created by PhpStorm.
 * User: stud05
 * Date: 04.03.19
 * Time: 17:20
 */

function getIntersectionOfSortedArray($mass1, $mass2)
{
    return( array_intersect($mass1, $mass2));
};

print_r(getIntersectionOfSortedArray([10, 11, 24], [10, 13, 14, 18, 24, 30]));


function newgetIntersectionOfSortedArray($mass1, $mass2)
{
    if( empty($mass2) || empty($mass2)) { return null; };


    $count1 = count($mass1);
    $count2 = count($mass2);
    $box = array();

    for ($i = 0; $i < $count1; $i++) {
        $number = $mass1[$i];

        for ( $ii = 0; $ii < $count2; $ii++ ) {


            if ($number === $mass2[$ii]){
                $box[] = $number;
                break;
            };
        };

    };

    return $box;

};


print_r(newgetIntersectionOfSortedArray([], [10, 13, 14, 18, 24, 30]));