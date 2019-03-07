<?php
/**
 * Created by PhpStorm.
 * User: stud05
 * Date: 05.03.19
 * Time: 15:10
 */

function make () {
    $map = fopen("Map.txt", "w");
    return $map;

};


function set($map, $key, $value) {
    fwrite();
};

$map = make();

print_r($map);