<?php
require __DIR__ . '/calc.php'; //require идентично include за исключением того, что при ошибке оно также выдаст фатальную ошибку
//Выражение include включает и выполняет указанный файл.
//__DIR__	Директория файла. Если используется внутри подключаемого файла, то возвращается директория этого файла.
if (isset($_POST['x'])){ // если не поместить в блоки $x и $y то они будут неопределены и выдаст Notice: Undefined index:...
    $x = (int)$_POST['x'];
}else{
    $x = null;
}
if (isset($_POST['x'])){
    $y = (int)$_POST['y'];
}else{
    $y = null;
}
$operations = ['+','-', '*', '/'];
if (isset($_POST['operation']) && in_array($_POST['operation'], $operations)){
    $op = $_POST['operation'];
}else{
    $op = null;
}


$res = calculate($x, $y, $_POST['operation']);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculator</title>
</head>
<body>


<form action="index.php" method="post">
    <input type="number" name="x" value="<?php echo $x ?>">
    <select name="operation">
        <option value="+" <?php if('+' == $op){ ?> selected  <?php } ?>>+</option>
        <option value="-" <?php if('-' == $op){ ?> selected  <?php } ?>>-</option>
        <option value="*" <?php if('*' == $op){ ?> selected  <?php } ?>>*</option>
        <option value="/" <?php if('/' == $op){ ?> selected  <?php } ?>>/</option>
    </select>
    <input type="number" name="y" value="<?php echo $y ?>">
    <input type="submit" value="=">

</form>
<?php echo $res; ?>
</body>
</html>
