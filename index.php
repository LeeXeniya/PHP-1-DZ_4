<!doctype html>
<html lang="ru">
<h1>Гостевая книга</h1>

<?php
include __DIR__ . '/funcs.php';

$comments = get_comments();

if(isset($comments)) {
    foreach ($comments as $value){
            
        echo '<pre>' . $value . '</pre>';
    }
}
?>

<form method="post" action="/send.php">
    Комментарий: <input type="text" name="text">
    <button type="submit">Отправить</button>
</form>
</html>
