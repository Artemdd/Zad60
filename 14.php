<?php
/**
 * Created by PhpStorm.
 * User: stud05
 * Date: 01.03.19
 * Time: 16:30
 */

function buildDefinitionList($def)
{
    if( empty($def)) { return null; };

    $n = count($def);
    $AllText = '';

    for ( $i = 0; $i < $n; $i++ ) {
        $text = "<dl><dt>{$def[$i][0]}</dt><dd>{$def[$i][1]}</dd>";
        $AllText = $AllText . $text;

    };

    return $AllText;
};


$definitions = [
    ['Блямба', 'Выпуклость, утолщения на поверхности чего-либо'],
    ['Бобр', 'Животное из отряда грызунов'],
];

var_dump(buildDefinitionList($definitions));