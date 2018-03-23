<?php
include_once 'function.php';

$db = db_connect();

if (count($_POST) > 0){
    $name = trim($_POST['name']);
    $text = trim($_POST['text']);

    if($name == '' || $text == ''){
        $msg = 'Заполните все поля';
    }
    else{
        $query = db_query("INSERT INTO messages (name, text) VALUES (:n, :t)", ['n'=>$name, 't'=>$text]);
        header('Location: index.php');
        exit();
    }
}
else{
    $name = '';
    $text = '';
    $msg = '';
}
?><!DOCTYPE html>
<html lang="en">
    <head>
        <title>Bootstrap Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    </head>
    <body>

    <div class="container">
        <h2>Форма для чата</h2>
        <p>Введите имя юзера и комментарий:</p>
        <form method="post">
            <div class="form-group">
                <label for="usr">Name:</label>
                <input type="text" class="form-control" id="usr"name="name" value="<?= $name;?>">
            </div>
            <div class="form-group">
                <label for="comment">Comment:</label>
                <textarea class="form-control" rows="5" id="comment" name="text"><?= $text;?></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    </body>
    </html>

<?= $msg;?>