<?php
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

function getDataByKey($id, $goods) {
    foreach ($goods as $arr){
        if ($arr['id'] == $id){
            return $arr;
        }
    }
    return false;
}
$get = $_GET;
$id = $get['id']; // 1
$info = getDataByKey($id, $goods);

function reverseArr($arr) {
    $newArr = [];
    for ($count = count($arr) -1 ; $count >= 0; $count--){
        array_push($newArr, $arr[$count]);
    }
    return $newArr;
}


$arr = [23, 89, 44, 67, 67];
$arr2 = reverseArr($arr); // = [67, 67, 44, 89, 23]
var_dump($arr2);

function getMinElem($arr){

}

function getMaxElem($arr){

}

$min = getMinElem($arr);
$max = getMaxElem($arr2);

?>

<h4>Информация о товаре</h4>
<div>
    <p><?php echo $info['title'];?></p> <!-- название -->
    <p><?php echo $info['price'];?></p> <!-- цена -->
    <img src="/img/<?php echo $info['img'];?>"
         alt="<?php echo $info['img'];?>">
</div>
