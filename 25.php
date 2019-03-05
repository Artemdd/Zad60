<?php
/**
 * Created by PhpStorm.
 * User: stud05
 * Date: 05.03.19
 * Time: 14:16
 */

function getSortedNames($mass)
{
  $NewMass = array();

  for ($i = 0; $i < count($mass); $i++) {
      $NewMass[] = $mass[$i]['name'];
  };

  sort($NewMass);

  return $NewMass;
};


$users = [
    ['name' => 'Bronn', 'gender' => 'male', 'birthday' => '1973-03-23'],
    ['name' => 'Reigar', 'gender' => 'male', 'birthday' => '1973-11-03'],
    ['name' => 'Eiegon',  'gender' => 'male', 'birthday' => '1963-11-03'],
    ['name' => 'Sansa', 'gender' => 'female', 'birthday' => '2012-11-03']
];

print_r( getSortedNames($users));