<?php
/**
 * Created by PhpStorm.
 * User: stud05
 * Date: 26.02.19
 * Time: 12:46
 */

function isPalindrome($word)

{
    $i = 1;
    $len = floor(strlen($word)/2);
    $LEN = strlen($word);

    while ($i <=  $len)
    {
        if ($word[$i] !== $word[$LEN - 1 - $i] )
        {
            return false;
        }

        $i = $i +1;
    }

    return true;
}




var_dump(isPalindrome());