<?php
/**
 * Created by PhpStorm.
 * User: stud05
 * Date: 28.02.19
 * Time: 10:49
 */

function quadratic($a, $b, $c)
{
    $D = $b**2 - 4 * $a * $c;

    if ($D < 0)
    {
        return false;
    }

    elseif ($D === 0)
    {
        $resh = -$b  / (2 * $a);
        return $resh;
    }

    else
    {
        $resh1 = -$b + sqrt($D) / (2 * $a);
        $resh2 = -$b - sqrt($D) / (2 * $a);

        return [$resh1, $resh2];
    }
}

$otv = quadratic(4, 7,1);

print_r( $otv );

/**
 * Функция решает квадратное уравнение.
 * нужно ввести переменные a b c соответственно.
 * если дискриминант уравнения будет меньше нуля, то есть уравнение нерешаемо,
 * то выйдет false
 */