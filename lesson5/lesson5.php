<?php

var_dump(realpath("file.txt"));
var_dump(getcwd());
//chdir("pdf");
//var_dump(getcwd());

if (copy("file.txt", "new_file.txt")) {
    echo "копирование завершено";
}

rename("new_file.txt", "new_name.txt");

unlink("new_name.txt");

//mkdir('data');
//rmdir('data');

function read_from_dir($dirname) {
    if (is_dir($dirname)) {
        if ($dh = opendir($dirname)) {
            while ( ($file = readdir($dh)) !== false ) {
                echo "file:  $file, type:  "
                    . filetype($dirname . $file) . ";<br>";
            }
            closedir($dh);
        }
    }
}

read_from_dir("data");

// написать рекурсивную функцию удаления непустого каталога
/*
 * 1. написать функцию,
 * которая будет удалять каталог и все его содержимое
 * 2. Осуществить рекурсивный вызов в подкаталогах
 * 3. Дано: path - путь к каталогу
 * */

$filename = 'file.txt';

function read_fread($filename, $len) {
    $fp = fopen($filename, 'r');
    $contents = fread($fp, $len);

    // чтение с использованием буфера
//    while (!feof($fp)) {
//        $contents .= fread($fp, 8192);
//    }

    fclose($fp);
    return $contents;
}

var_dump(read_fread($filename, filesize($filename)));

function read_fgets($filename) {
    $buf = null;
    $fp = fopen($filename, 'r');
    if(!$fp) return false;
    while (!feof($fp)) {
        $buf .= fgets($fp, 4096);
    }
    fclose($fp);
    return $buf;
}

function writeFile($filename, $data) {
    $fp = fopen($filename, 'a'); // w
    fwrite($fp, $data);
    fclose($fp);
}
writeFile($filename, "dfsss");

//file_put_contents();
//file_get_contents();

// читает в массив
file ( $filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

/*1. создать html форму с одним текстовым полем и кнопкой submit
2. пользователь вводит в форму ссылку (URL адрес)
3. написать обработчик,
который проверяет наличие такой же ссылки в файле,
если не находит, то записывает ее в конец файла */







