<?php
// mysql -u root -p
// CREATE USER 'username'@'localhost' IDENTIFIED BY 'pwd'
// CREATE DATABASE dbname;
// SHOW DATABASES;
// USE dbname;
// DROP DATABASE dbname;

// CREATE TABLE Article (
//    id INT NOT NULL AUTO_INCREMENT,
//    title VARCHAR(255) NOT NULL,
//    `text` TEXT NOT NULL,
//    PRIMARY KEY (id)
//);

//INSERT INTO Article (title, `text`)
// VALUES ('Статься №2', 'В начале 1970-х годов в одной');

$server = 'localhost';
$db_name = 'pdolesson'; // имя базы данных
$username = 'someuser';
$pwd = 'password';

$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
//    PDO::ATTR_PERSISTENT => true
];

// создать объект PDO
function dbConnect($server, $db_name, $username, $pwd, array $opt=[])
{
    return new PDO("mysql:host=$server;dbname=$db_name",
        $username, $pwd, $opt);
}

$connection = dbConnect($server, $db_name, $username, $pwd, $options);

//try {
//    $connection->beginTransaction();
//// выполнять несколько запросов
//    $connection->commit();
//} catch (PDOException $e) {
//    $connection->rollBack();
//    var_dump($e->getTraceAsString());
//}

// запустить строку запроса на выполнение
//1 exec(строка запроса); - возвращает количество модифицированных строк
//2 query(строка запроса); - возвращает объект PDOStatement

// получение данных
//'SELECT
//имена столбцов, по которым будет осуществляться выборка
//либо * (чтобы получить данные по всем столбцам)
//FROM
//имя таблицы, из которой будет осуществляться выборка
//[Условия выборки]';

$sql = 'SELECT title FROM Article';
$statement = $connection->query($sql);
var_dump($statement);
$data = $statement->fetchAll(PDO::FETCH_ASSOC);
var_dump($data);

$sql = 'SELECT title FROM Article WHERE id=1';
$statement = $connection->query($sql);
var_dump($statement);
$data = $statement->fetch(PDO::FETCH_ASSOC);
var_dump($data);

$title = 'Статься №3';
$text = 'В начале 1970-х годов в одной';
$sql = "INSERT INTO Article (title, `text`)
VALUES ($title, $text)";
$id = 2;
$sql = "SELECT title FROM Article WHERE id=$id";

// подготовленные запросы
// с именованными параметрами
$sql = "SELECT title FROM Article WHERE id=:id";
$params = [
    'id'=> $id
];
// подготовка запроса
$statement = $connection->prepare($sql);
$statement->execute($params);


$data = $statement->fetch(PDO::FETCH_ASSOC);
var_dump($data);

//$sql = "INSERT INTO Article (title, `text`)
//VALUES (:title, :text)";
//$title = 'Статься №3';
//$text = 'В начале 1970-х годов в одной';
//$params = [
//    'title'=>$title,
//    'text'=>$text
//];
//$statement = $connection->prepare($sql);
//$statement->execute($params);

// неименованные параметры подготовленного запроса
$sql = "INSERT INTO Article (title, `text`)
VALUES (?, ?)";
$params = [$title, $text];

// обновление данных
$sql = 'UPDATE Article SET title=:title, `text`=:descr
WHERE id=:id';
$params = [
    'title'=>'New Article',
    'descr'=>'New Description',
    'id'=>3
];
$statement = $connection->prepare($sql);
$statement->execute($params);