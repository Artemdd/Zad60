<?php
/**
 * Created by PhpStorm.
 * User: stud05
 * Date: 26.02.19
 * Time: 14:12
 */

function isPalindrome($word)
{
    $WORD = strrev($word);
    $i = 0;
    $len = strlen($word);

    while ($i <= $len)
    {
        if ($word[$i] !== $WORD[$i])
        { return false;
        }
        $i = $i + 1;
    }

    return true;
}

var_dump(isPalindrome('dad'));