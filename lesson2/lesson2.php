<?php
$a = 3;
$b = 4;
if ($a < 10) {
    var_dump('$a < 10');
} elseif ($b < 10) { //else if
    var_dump('$b < 10');
} else {
    var_dump('else block');
}

// альтернативный синтаксис
//if (условие):
//    код;
//elseif (условие2):
//    код;
//else:
//    код;
//endif;
$login = true;
$userName = "Alex";

// тернарный оператор
$someVar;
$somVarRes = (!isset($someVar)) ? 'default' : $someVar;
var_dump($somVarRes);
// короткий синтаксис
// $res = выражение1 ? : выражение2;

// c php7 оператор объединения с null ??
$somVarRes = $someVar ?? 'default';
var_dump($somVarRes);

// оператор switch
$a = 1;
$b = 2;

// <=>
switch ($a <=> $b) {
    case 0:
        echo 'a = b';
        break;
    case 1:
        echo 'a > b';
        break;
    case -1:
        echo 'a < b';
        break;
    default:
        echo 'default';
}

// альтернативный синтаксис
/*switch (переменная или выражение):
    case вариант1:
        код;
        break;
    case вариант2:
    case вариант3:
        код;
        break;
    default:
        код;
endswitch; */
$var = 0;
while ($var < 4) {
    $var++;
    echo "$var - ";
}

// альтернативный синтаксис
//while (условие):
//    тело цикла;
//endwhile;

do {
    var_dump("do while");
} while (false);

//for (начало(инициализация счетчика); проверка условие; обновление счетчика) {
//    тело цикла;
//}

//for (начало; проверка условие; обновление счетчика):
//    тело цикла;
//endfor;

// массивы

// создать пустой массив
$arr = array();
$arr = [];
// нумерованные массивы
$arr = array(4, 7, 9, 23);
$arr = [4, 7, 9, 23];
var_dump($arr);
var_dump($arr[3]); // обращение к элементу по индексу
$arr[9] = "new element";
$arr[4] = "new element2";
var_dump($arr);
var_dump($arr[5]);


$arr2 = [
  'key1' => 'value',
  'key2' => 'value',
  'key3' => 'value',
];

$arr2 = [
  'key' => 45,
    5 => null,
    null => 'value',
    false => [2, 7, 90],
    5 => '5'
];
var_dump($arr2);

// перебрать массив foreach
$arr = [4, 7, 9, 23];
foreach ($arr as $value) {
    $value += 50;
    var_dump($value);
}
var_dump($arr);

// начиная с php7
foreach ($arr as &$value) {
    var_dump($value);
    $value += 50;
}
unset($value);
var_dump($arr);

$good = [
   'id' => 1,
   'title' => 'Piano',
   'price' => 234,
   'img' => 'piano.png'
];
foreach ($good as $key => $value) {
    var_dump($key . ' = ' . $value);
}

// альтернативный синтаксис
//foreach(массив as ключ => значение):
//    тело цикла;
//endforeach;

$goods = [
   [
       'id' => 1,
       'title' => 'Piano',
       'price' => 234,
       'img' => 'piano.png'
   ],
   [
       'id' => 2,
       'title' => 'Drum',
       'price' => 352,
       'img' => 'drum.png'
   ],
   [
       'id' => 3,
       'title' => 'Guitar',
       'price' => 155,
       'img' => 'guitar.png'
   ]
];
// http://php-base/lesson2/good.php?id=1
?>


<div class="goods">
        <? foreach ($goods as $arr):?>
    <div class="one-good">
        <p><? echo $arr['title'];?></p> <!-- название -->
        <p><? echo $arr['price'];?></p> <!-- цена -->
        <p>
            <a href="good.php?id=<?php echo $arr['id'];?>">
                Подробнее
            </a>
        </p> <!-- id -->
        <img src="/img/<? echo $arr['img'];?>"
             alt="<? echo $arr['img'];?>">
    </div>
    <?php endforeach;?>
</div>



<div>
    <?php if($login): ?>

    <p>Hello <?php echo $userName; ?></p>
    <button>Выйти</button>

    <?php else: ?>

    <button>Войти</button>

    <?php endif; ?>
</div>







