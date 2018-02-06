<?php
session_start();
if(!isset($_SESSION['test']) && !isset($_POST['q'])){
    $q = 0;
    $title = 'Пройдите тест';
}else{
    if($_POST['q'] != 1){
        $_SESSION['test'][] = $_POST['answer'];
    }
    $q = $_POST['q'];
    $title = $_POST['title'];
}


?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Test</title>
</head>
<body>
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4"><?= $title ?></h1>
        <p class="lead"><a href="index.php">Прервать тест и вернуться на главную страницу</a></p>
        <?php
        // В зависимости от номера вопроса,
        // подключаем соответствующий файл с вопросами
        switch ($q){
            case 0:
                include 'start.php';
                break;
            case 1:
                include 'q1.php';
                break;
            case 2:
                include 'q2.php';
                break;
            case 3:
                include 'q3.php';
                break;
            default:
                include 'result.php';
        }
        ?>
    </div>
</div>

</body>
</html>
