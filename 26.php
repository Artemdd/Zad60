<?php
/**
 * Created by PhpStorm.
 * User: stud05
 * Date: 07.03.19
 * Time: 9:28
 */

function make() {
$map = array();
return $map;
};


function set(&$map, $key, $value) {

    $key = crc32($key) % 1000;
    if ( $map[$key] === null ) {
        $map[$key] = $value;
        return true;
    };
    return false;
};


function get(&$map, $key, $default = null) {

    $key = crc32($key) % 1000;
    if ( $default === null ) {
    return $map[$key]; };

    return $default;

};



$map = make();
//$result = get($map, 'key');
//var_dump($result );


//$result = get($map, 'key', 'value');
//print_r($result);

set($map, 'key2', 'value2');
$result = get($map, 'key2');
print_r($result . "\n");

print_r ($map);