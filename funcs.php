<?php
function get_comment() {

    $lines =  file_get_contents(__DIR__ . '/data/text.txt');
    $lines = explode(PHP_EOL, $lines);
    return $lines;
}
