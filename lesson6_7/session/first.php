<?php
session_start(); // инициализация сессии

// записываем данные сессии
//$_SESSION['auth'] = true;
//$_SESSION['username'] = 'qwe';

// проверка наличия переменной
//isset($_SESSION['username']);

// удалить переменную
//unset($_SESSION['username']);

// закрыть сессию
//session_destroy();

/*
session_name(); // возвращает имя сессии
session_name($name); //устанавливает или возвращает имя сессии

session_id();// возвращает id сессии
session_id($id);// id id сессии

session_regenerate_id(); // создает новый id сессии

session_save_path(); // возвращает имя каталога с сессиями
session_save_path($dir); // устанавливает имя каталога с сессиями
*/

$post = $_POST;

function auth($login, $pwd) {
    if (!$login || !$pwd) { return false; }

    // проверка логина и пароля
    $l = 'qwe';
    $p = '123';

    if ($login == $l && $pwd == $p) {
//        $_SESSION['auth'] = true;
        $_SESSION['login'] = $login;
    }

    return true;
}

function logout(){
    session_destroy();
    unset($_SESSION['login']);
}

auth($post['login'], $post['pwd']);

$get = $_GET;
$out = $get['out'];

// проверка существования значения переменной
//isset($get['out']);
// проверка существования значения переменной и самой переменной
//empty($get['out']);

if ($out) {
    logout();
}

?>

<?php if (isset($_SESSION['login'])): ?>
<!--    <form action="first.php" method="post">-->
<!--        <input type="submit" value="Выход">-->
<!--    </form>-->


<h2><a href="first.php?out=true">Выход</a></h2>
<?php else: ?>

<form method="post" action="first.php">
    <div>
        <input name="login" type="text" placeholder="login">
    </div>
    <div>
        <input name="pwd" type="password" placeholder="password">
    </div>
    <div>
        <input type="submit" value="Войти">
    </div>
</form>
<?php endif; ?>

<li><a href="second.php">Second page</a></li>
