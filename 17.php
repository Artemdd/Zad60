<?php
/**
 * Created by PhpStorm.
 * User: stud05
 * Date: 04.03.19
 * Time: 16:47
 */

function countUniqChars($str)
{
    $str = count_chars($str, 3);
    $str = strlen($str);
    return $str;
};


$text1 = '';
print_r (countUniqChars($text1));