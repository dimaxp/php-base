<?php

// ЗАГРУЗКА ФАЙЛОВ НА СЕРВЕР
$files = $_FILES; // хранит всю информацию о загруженных файлах
var_dump($files['picture']);

$name = $files['picture']['name'];
$tmp_name = $files['picture']['tmp_name'];
// md5();
//md5_file();
move_uploaded_file($tmp_name, "data/$name");

//UPLOAD_ERR_OK - 0
//UPLOAD_ERR_INI_SIZE - 1
//UPLOAD_ERR_FORM_SIZE - 2
//UPLOAD_ERR_PARTIAL - 3
//UPLOAD_ERR_NO_FILE - 4
//UPLOAD_ERR_NO_TMP_DIR - 6
//UPLOAD_ERR_CANT_WRITE - 7
//UPLOAD_ERR_EXTENSION - 8

?>

<form enctype="multipart/form-data"
      action="load_files.php" method="post">

    <input type="hidden" name="MAX_FILE_SIZE" value="300">

    <input name="picture[]" size="" type="file" multiple accept="image/*"> <br>
<!--    <input name="picture[]" type="file" accept="image/*">-->
<!--        multiple / size=""-->
    <input type="submit" value="Send">
</form>
