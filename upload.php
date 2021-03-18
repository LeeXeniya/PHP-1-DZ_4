<?php

$res = false;

if (isset($_FILES['userfile'])) {
    if(0 === $_FILES['userfile']['error']) {
        $res = move_uploaded_file(
            $_FILES['userfile']['tmp_name'],
            __DIR__ . '/images/' . $_FILES['userfile']['name']
        );
    }
}

if($res) {
    ?>Файл успешно загружен<?php
}
