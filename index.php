<?php

function getFiles($dir) {
    $files = scandir($dir, 1);
    $length = count($files) - 2;

    return $files[rand(0, $length)];
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Taylor Swift</title>
    </head>
    <body style="background-image: url('images/<?php echo getFiles("images"); ?>')">
        <audio autoplay="">
            <source src="songs/<?php echo getFiles("songs"); ?>">
        </audio>
    </body>
</html>
