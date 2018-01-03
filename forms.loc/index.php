<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forms</title>
</head>
<body>
<?php
include_once 'functions.php';

print_r($_POST);


if (isset($_POST['submit'])) {
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    if(!empty($a) && !empty($b) && !empty($c)){
        $result = quadratic($a, $b, $c);
        if($result != false){
            print_r($result);
        }else{
            echo "Корней нет!<br>";
        }
    }
    echo "Форма отправлена a = $a, b = $b, c = $c; <br>";
}

?>

<form action="index.php" method="post">
    A: <input type="text" name="a"><br>
    B: <input type="text" name="b"><br>
    C: <input type="text" name="c"><br>
    <input type="submit" value="Submit" name="submit">
</form>
</body>
</html>