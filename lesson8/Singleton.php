<?php
/**
 * Created by PhpStorm.
 * User: dasha
 * Date: 11.12.2018
 * Time: 19:55
 */


//parent:: ссылка на родительский класс!!
//self:: ссылка на текущий класс!!
//$this - контекст объекта!!

// паттерн одиночка
class AppConfig
{
    private static $instance;

    private $data;
    private $file;

    // для запрета создания объектов вне класса
    // необходимо скрыть конструктор
    private function __construct() {}

    public static function getInstance() {
//       $this->data
        if(!self::$instance) {
            // в контексте класса
            // можно создавать объект через new self()
            // эквивалентно new AppConfig();
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function setFile($file)
    {
        $this->file = $file;
    }

    public function writeConfig($key, $val){
        var_dump('writeConfig');
    }
    public function readConfig($key){
        var_dump('readConfig');
        return "value";
    }
}