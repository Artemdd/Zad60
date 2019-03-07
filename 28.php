<?php
/**
 * Created by PhpStorm.
 * User: stud05
 * Date: 07.03.19
 * Time: 10:53
 */

/**
 * Для работы скрипта необходим файл "27.php" в котором содержится функция
 * file_get_contents.
 * Для начала работы нужно ввести имя .txt файла "voina-i-mir.txt" или любого
 * другого, лежащего в корневой директории.
 * на выход пойдет отсортированный массив, где ключи - это слова, а значения -
 * это их колличество в тексте
 */

print_r('Введите имя файла' . "\n");

$name = fgets(STDIN);



if (empty($name)) {
$Text = file_get_contents("voina-i-mir.txt"); }

else {
    $Text = file_get_contents($name);
};

var_dump($name);


require_once "27.php";

$MASS = wordsCount($Text);

arsort($MASS);



print_r($MASS['князь']);




// Самый часто встречающийся символ
//print_r(key($MASS) . ' => ' . current($MASS));


