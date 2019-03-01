<?php
/**
 * Created by PhpStorm.
 * User: stud05
 * Date: 26.02.19
 * Time: 14:26
 */

function reverse($number)
{
    $number = "$number";
    $NewNumber = '';
    //substr($number, $i, 1);
    $len = strlen($number);
    $i = $len - 1;

    for ($i; $i >= 0; $i--)
    {
        $NewNumber = $NewNumber . $number[$i];
    }

    $NewNumber = $NewNumber * 1;
    return $NewNumber;

}


print_r(reverse(123456 ));


/**
 * Функция принимает на вход переменную $number (int или string)
 * внутри она переводит ее в формат string, если она таковой не являлась
 * далее она переворачивает строку, затем она переводит переменную в формат int
 * посредством умножения ее на единицу.
 */