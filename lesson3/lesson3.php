
<?php
declare(strict_types=1);

// функции
//объявление функции

//function doSmth($arg1, &$arg2, $arg3='default value', ...$arg){
//    // function body
//    return;
//}
//
//// call function
//doSmth();

function sum($a, $b){
    return $a + $b;
}
$res = sum(2, 6);
var_dump($res);

$str = 'Hello ';

function changeStr(&$strArg, $str2Arg){
    $strArg .= $str2Arg;
}

changeStr($str, 'PHP'); // hello php

$string = "Str";

changeStr($string, 'PHP'); // hello php
var_dump($str);

function sayHi($text='guest'){
    echo 'Hi ' . $text;
}

sayHi("admin");
sayHi();

function getSum(...$numbs) { //[1, 4, 6, 7]
    return array_sum($numbs);
}

$sum = getSum(1, 4, 6, 7);
var_dump($sum);

function getSum2($a, $b){
    return $a + $b;
}

var_dump(getSum2(...[2, 8]));

// args types:
// php5 - arrays | classes
// php7 - arrays | classes | simple types
// php7 - return type
//declare(strict_types=1);
function tst(float $arg, int $arg1): int {
//    if (!is_float($arg)) {
//        return false;
//    }
    var_dump(gettype($arg));
    var_dump($arg);
    return 90;
}
tst(67, 56);

// static var
function withStaticVar(){
    static $counter = 0;
    $counter++;
    return $counter;
}

var_dump(withStaticVar()); // 1 // 1
var_dump(withStaticVar()); // 1 // 2
var_dump(withStaticVar()); // 1 // 3
var_dump(withStaticVar()); // 1 // 4


$someVar = "someVar";

$a = 6;
$b = 8;

const SOME_CONST = "Const value";

function someFunc(){
    var_dump(SOME_CONST);
    $someVar = "new value";
    var_dump($someVar);
}

someFunc();
var_dump($someVar);

$someF = function ($args) {
    echo $args;
};
$someF("Анонимная функция");

//func_get_arg();
//func_get_args();
//func_num_args();

function showArgs(){
    var_dump('func_get_args ');
    foreach (func_get_args() as $arg) {
        var_dump($arg);
    }
    var_dump('func_get_arg ' . func_get_arg(0));
    var_dump('func_num_args ' . func_num_args());
}
showArgs(45, 89, null, false);
showArgs();

function getSomeData() {
    $a = 7;
    $b = 8;
    $c = 90;
    $d = 12;

//    return [$a, $b, $c, $d];
    return [
        'a' => $a,
        'b' => $b,
        'c' => $c,
        'd' => $d,
    ];
}