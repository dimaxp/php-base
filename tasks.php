<?php
$arr = array(1,2,3);
$arr = [1,2];
$arr2 = [1=>1,2=>3];

var_dump($arr);

var_dump($arr["1"]);

var_dump($arr2);

$array = ['id' => 10, 'price' => 20];
foreach ($array as $key => $value) {
    var_dump($key);
    var_dump($value);
}
for ($i = 0; $i < count($arr); $i++) {
    var_dump($arr[$i]);
}


function hi($arr,$index){
    if (!isset($arr[$index])){
        return false;
    }
    return $arr[$index];
}
$arr3=[1,3,4];
var_dump(hi($arr3,7));


//0 5 10 15 20
for ($i = 0; $i <= 20; $i+=5){
    array_push($arr3,$i);
}
var_dump(array_reverse($arr3));

$arr = [
    ['name' => 'A',
     'zarplata' => 10000],
    ['name' => 'B',
        'zarplata' => 20000],
    ['name' => 'C',
        'zarplata' => 30000],
];

foreach ($arr as $value) {
    if ($value['zarplata']>20000) {
        var_dump($value['name']);
    }
}

$post = $_POST;

var_dump($post['place']);
var_dump($post);
//unset($post['place']);
?>
<?php if (!isset($post['place'])): ?>
<form action="tasks.php" method="post">
    <input type="text" name="place" placeholder="Страна проживания?">
    <input type="submit">
</form>
<? endif ?>

<?php

$min = 15;

function h($min){
    if($min >= 0 && $min <= 15){
        return('первая четверть часа');
    } if ($min > 15 && $min <= 30){
        return('вторая четверть часа');
    } if ($min > 30 && $min <= 45){
        return('третяя четверть часа');
    } return('четвертая четверть часа');
}
var_dump(h($min));

$arr = ['ru' => ['п', 'в', 'с', 'ч', 'пт', 'сб', 'вс'],
        'en' => ['m', 't', 'w', 'th', 'f', 'st', 'sn']];
function getDay($arr, $lang, $number) {
    return $arr[$lang][$number];
}
var_dump(getDay($arr, 'ru', 6));







