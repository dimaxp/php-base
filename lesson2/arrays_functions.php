<?php
$array =['day', 'week', 'mounth']; //
array_pop($array);
$arr1 = array_pop($array);
var_dump($arr1);

$array =['day', 'week', 'mounth'];
array_shift($array);
var_dump(array_shift($array));

$array =['day', 'week', 'mounth'];
array_push($array, 'hour');
var_dump($array);
