<?php

require_once "IParamHandler.php";
abstract class ParamHandler implements IParamHandler
{
    protected $file;
    protected $params = [];

    public function __construct($file)
    {
        $this->file = $file;
    }

    public function addParam($key, $value)
    {
        $this->params[$key] = $value;
    }

    public function getAllParams()
    {
        return $this->params;
    }

    public static function getInstance($filename){
        $type = pathinfo($filename, PATHINFO_EXTENSION);
        var_dump("type: $type"); // txt

        if (!$type) {
            // выбросить исключение формат неизвестен
            var_dump("формат неизвестен");
            return false;
        }

        $classname = ucfirst(strtolower($type)) . 'Handler';
                                          //'Txt' . 'Handler'
        var_dump("classname: $classname"); // 'TxtHandler'

        var_dump('__DIR__: ' . __DIR__);
        $path = __DIR__ . '/' . $classname . '.php';
        // 'TxtHandler' . '.php'
        var_dump("path: $path"); // TxtHandler.php

        if (!is_readable($path)) {
            // выбросить исключение файла не существует
            var_dump("файла не существует");
            return false;
        }

        include_once $path; //  include_once "TxtHandler.php"

        if (!class_exists($classname)) {
            // выбросить исключение класс не найден
            var_dump("класс не найден");
            return false;
        }

        $obj = new $classname($filename);
        // $obj = new TxtHandler($filename);

        if(!is_subclass_of($obj, 'IParamHandler')) {
            // выбросить исключение не тот интерфейс

            var_dump("не тот интерфейс");
            return false;
        }

        return $obj;
    }
}