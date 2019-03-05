<?php
/**
 * Created by PhpStorm.
 * User: stud05
 * Date: 05.03.19
 * Time: 11:54
 */

function getIn($mass, $keys)
{
      $glub = count($keys);

      for ($i = 0; $i < $glub; $i++) {

          if ( !is_array($mass) ) {
              return NULL;
          };

          $mass = $mass[$keys[$i]];
      };

      return $mass;

};

$data = [
    'user' => 'ubuntu',
    'hosts' => [
        ['name' => 'web1'],
        ['name' => 'web2']
    ]
];


var_dump( getIn($data, ['hosts', 0]) );