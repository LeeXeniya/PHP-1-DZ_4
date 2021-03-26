<?php

include __DIR__ . '/funcs.php';
$str = $_POST['text'];

if(!empty($str)) {
    $comments = get_comments();
    $comments[] = $str;
    $com = implode(PHP_EOL, $comments);
    file_put_contents(__DIR__ . '/data/text.txt', $com);
    header('Location: http://localhost:8008/index.php');
}
