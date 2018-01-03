<?php
session_start();

$answer1 = $_POST['number1'];
$_SESSION['number1'] = $answer1;
echo $_SESSION['number1'];
?>

<p>Вопрос:</p>
<p>Сколько будет 8 * 9?</p>
<form action="/index.php" method="post">
    <input type="number" name="number2">
    <input type="submit">
</form>
