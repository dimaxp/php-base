<?php
// взаимодействие с пользователем

// http сообщение
//1. строка запроса (Request Line)
//    - метод передачи данных
//    - URL адрес, к которому нужно обратиться
//    - версия http протокола
//2. заголовки (Message Headers)
//    описывают тело сообщения,
//    несут информацию о клиенте (браузере),
//    запрошенной странице и др
//3. тело сообщения

$server = $_SERVER;

//var_dump($server);

$link = 'http://' . $server['HTTP_HOST'] . $server['REQUEST_URI'];
var_dump($link);

// распарсить строку запроса можно с помощью функции:
$parsedUrl = parse_url($link);
var_dump($parsedUrl);

// отправка данных в строке запроса
//строка запроса ?param1=value1&param2=value2

// В URL можно использовать
//латинские буквы
//цифры
//некоторые знаки препинания
//ОСТАЛЬНЫЕ символы должны быть перекодированы

//функции кодировки
//[^0-9A-Za-z_~-]
urlencode($url_str); //+ для пробела
rawurlencode($url_str); //%20 для пробела

$link = 'https://www.google.ru/search?q=%D1%84%D1%83%D0%BD%D0%BA%D1%86%D0%B8%D0%B8+%D0%BA%D0%BE%D0%B4%D0%B8%D1%80%D0%BE%D0%B2%D0%BA%D0%B8+php&rlz=1C1GGRV_ruRU815RU815&oq=%D1%84%D1%83%D0%BD%D0%BA%D1%86%D0%B8%D0%B8+%D0%BA%D0%BE%D0%B4%D0%B8%D1%80%D0%BE%D0%B2%D0%BA%D0%B8+php&aqs=chrome..69i57j0.9215j0j8&sourceid=chrome&ie=UTF-8';

//функции декодировки
var_dump(urldecode($link));
rawurldecode($link);

// формирование запроса
$data = [
    'param1' => 'value 1',
    'param2' => 'value 2',
    'param3' => 'value 3',
];

$url = 'http://some.com?' . http_build_query($data);
var_dump($url);

// передача данных get и post запросом
// GET запрос
//параметры всегда передаются в строке запроса
//могут кешироваться
//остаются в истории браузера
//имеют органичения по длине
// доступны через массив $_GET

$get = $_GET;
var_dump($get);


// POST запрос
// скрывает все передаваемые данные
// никогда не кешируется
// не сохраняется в истории браузера
// доступны через массив $_POST

?>

<form method="post" action="lesson4.php">
    <input name="data" type="text">
</form>

<?php

$post = $_POST;
var_dump($post);
$data = $post['data'];
var_dump(trim($data));

// валидация данных на стороне сервера
trim($str); // удаляет пробелы (либо другие символы)
// из начала и конца строки

//empty($str); // проверка на пустое значение

//нельзя напрямую работать с суперглобальными массивами
//$post = $_POST;
//$get = $_GET;

//strip_tags(); // удаляет html и php теги из строки
//htmlspecialchars();
//htmlspecialchars_decode();

//htmlentities(); html_entity_decode();

//для работы с бд
addslashes($str);
//stripcslashes($str);

//filter_var(переменная, filter);
//filter_var_array(массив);

?>


<li>
    <a href="http://php-base/lesson4/lesson4.php?id=3">
        Lesson 4
    </a>
</li>




<nav>
    <ul>
        <li><a href="index.php?id=90">1</a></li>
        <li><a href="about.php">2</a></li>
        <li><a href="contacts.php">3</a></li>
    </ul>
</nav>




