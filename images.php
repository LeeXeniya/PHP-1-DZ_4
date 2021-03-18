<?php

$list = scandir(__DIR__ . '/images');

foreach ($list as $img) {
    if('.' !== $img && '..' !== $img){ ?>
         <img src="/images/<?php echo $img; ?>"><?php
    }
}
?>
<form action="/upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="userfile">
    <button type="submit">Загрузить</button>
</form>

