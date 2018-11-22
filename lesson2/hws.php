<?php
/*1 . Дан массив [3, 1, 6, 0, 4, 5].
С помощью цикла foreach найдите сумму квадратов
элементов этого массива.*/

$goods = array(3,1,6,0,4,5);
foreach ($goods as $value)
{
//    $value = $value**2;
$sum += $value**2;
}
unset($value);
var_dump($sum);
var_dump($goods);
echo "<br/>";




/*2. Нарисуйте треугольник (или ромб) из символов *.
Высота треугольника равна 15. */
$prob = "&nbsp&nbsp";
$tochka = '*';
$centr = 15;
for ($i = 0; $i<15; $i++){
$storona1 = $centr - $i;
$storona2 = $centr + $i;
$string2 = "";
for ($k = 1; $k < 30; $k++){
if ($k === $storona1){
$string2 .= $tochka;
}else if ($k === $storona2 ){
$string2 .= $tochka;
}else if ($i === 14){
$string2 .= $tochka;
}else {
$string2 .= $prob;
}
}
echo "$string2 <br>" ;
}
/*3. Создать массив из дней недели.
С помощью цикла foreach выведите все дни недели,
а текущий день выведите жирным.
Текущий день можно получить с помощью функции date.
Название дней выводить по-русски */

$today = date('l');
$dayArray = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"];
foreach ($dayArray as $value){
if($value === $today){
echo '<b>' . $value .'</b>';
}else {
echo $value;
};
}

$week = array(
'Понедельник ', 'Вторник ',
'Среда ','Четверг ', 'Пятница ',
'Суббота ', 'Воскресенье ');


foreach ($week as &$value) {
if($value === $week[date('N')-1]) {
echo '<b>'.$value.'</b>';
} else {
echo $value;
}
}

var_dump($week);

/*4. Отсортировать массив по 'price' */
$arr = [
'1'=> [
'price' => 10,
'count' => 2
],
'2'=> [
'price' => 5,
'count' => 5
],
'3'=> [
'price' => 8,
'count' => 5
],
'4'=> [
'price' => 12,
'count' => 4
],
'5'=> [
'price' => 8,
'count' => 4
],
];

$price = array_column($arr, 'price');
array_multisort($arr, SORT_ASC, $price);
var_dump($arr);

//var_dump($arr);
//$price = $arr['price'];
//var_dump('price: '. $price);
//array_multisort($arr);

//usort($arr, 'ComPr');
//function ComPr($a, $b) {
//    if ($a['price'] == $b['price']) return 0;
//    return $a['pri,ce'] > $b['price'] ? 1 : -1;
//}
//var_dump($arr);
