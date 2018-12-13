<?php

include_once "ParamHandler.php";
include_once "XmlHandler.php";
include_once "TxtHandler.php";


$config = ParamHandler::getInstance('params.txt');
$config->addParam('key 1', 'value');
$config->addParam('key 2', 'value');
$config->addParam('key 3', 'value');
$config->write();

$config2 = ParamHandler::getInstance('params.xml');
$config2->read();

// инкапсуляция
// наследование
// полиморфизм
// абстракция

// повторное использование
// посылка сообщений
