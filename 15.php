<?php
/**
 * Created by PhpStorm.
 * User: stud05
 * Date: 01.03.19
 * Time: 17:43
 */

function makeCensored($sentence, $word)
{
    $n = count($word);
    $zam = '$#%!';

    for ( $i = 0; $i < $n; $i++) {

        $dword = $word[$i];
        $len = strlen($dword);
        $pos = strpos($sentence, $dword);
        $offset = $pos;


        while ( $pos !== false ) {

            if ( $pos === 0 && $sentence[$len] === ' ' || $pos === strlen($sentence) - $len && $sentence[-$len - 1] === ' ' || $sentence[$pos - 1] === ' ' && $sentence[$pos + $len] === ' ')
            {
                $sentence = substr_replace($sentence, $zam, $pos, $len);
                $pos = strpos($sentence, $dword, $offset);
                $offset = $pos;
            }

            else {
                $pos = $pos + 1;
                $offset = $pos;
            };


        };

    };

    return $sentence;
};


$sentence = 'When you play the game of thrones, you win or you die';
print_r (makeCensored($sentence, ['die', 'play']) . "\n");

$sentence2 = 'chicken chicken? chicken! chicken';
print_r (makeCensored($sentence2,  ['chicken']) . "\n");