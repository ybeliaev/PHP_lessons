<?php
	session_start();

	if(!isset($_SESSION['auth'])){ // смотри login.php строка 7
// проверить куки с логином и паролем
        if($_COOKIE['login'] == 'admin' && $_COOKIE['password'] == 'qwerty'){
            echo 'Вы успешно авторизированы';
        }
        else{
            header('Location: login.php');
            exit();
        }
        
    }
    
?>
<p>Секретая страница. Только для авторизированного пользователя</p>
<a href="login.php">Выйти</a>