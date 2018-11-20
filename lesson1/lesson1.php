<?php
// однострочный комментарий
# однострочный комментарий

/*многострочный
  комментарий*/

echo "Какая-то информация";

var_dump("Какая-то информация"); // отладка

$varName = 123;
// типы данных
// скалярные типы
//целочисленный тип (integer)
//числа с плавающей точкой (float/double)
// булевый тип (true false)
// строки string
$str = "String $varName";
$str2 = 'String $varName';
var_dump($str);
var_dump($str2);
// смешанные типы
//массивы array();
//объекты
// специальные типы
//дескриптор ресурсов
//null:
//$someVar = 23;
//unset($someVar);
//var_dump($someVar);

//is_array($varName);
//is_bool($varName);
//is_integer($varName);

//var_dump(gettype($str));

// константы
define('CONST_NAME', 'Const value');
const CONST_NAME2 = 'Const2 value';

//var_dump(get_defined_constants());
//CONST_NAME = 'new name'; // значение константы изменить нельзя
var_dump(CONST_NAME);

//(int) / (integer)
//(bool) / (boolean)
//(float) / (double) / (real)
//(string)
//(array)
//(object)
$data = "23string";
var_dump((integer)$data);
var_dump((boolean)$data);

// арифметические операторы
// + - / * % **(возведение в степень)
//. конкатенация строк
var_dump(3**2);
var_dump("str " . "str2");

// операторы сравнения
//< > <= >= != == ===
// <=> - начиная с версии php7.0.0

// операторы присваивания
// = += -= /= *= %= **= .=

// инкремент(++) и декремент(--)

// логические операторы
//&& and - и
//if ($varName and $str2) {}
// || or - или
//if ($varName || $str2) {}
// ! не
// xor
//if ($varName xor $str2) {}

// оператор исполнения ``
//$a = `ifconfig`;



