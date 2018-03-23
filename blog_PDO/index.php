<?php
include_once 'function.php';

$query = db_query("SELECT name, text, dt FROM messages ORDER BY dt DESC ");

$messages = $query->fetchAll();
echo '<pre>';
print_r($messages);
echo '</pre>';
?>
<?php foreach($messages as $message){ ?>
    <div>
        <em><?=$message['dt']?></em>
        <strong><?=$message['name']?></strong>
        <div><?=$message['text']?></div>
    </div>
    <hr>
<?php } ?>
<a href="add.php">Добавить</a>