<?php
/**
 * Created by PhpStorm.
 * User: stud05
 * Date: 05.03.19
 * Time: 11:44
 */

function getComposerFileData()
{
    $json = file_get_contents('composer.json');
    $mass = json_decode($json);


    return $mass;
};

print_r( getComposerFileData() );