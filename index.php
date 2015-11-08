<?php

function getSongs() {
    $dir = "songs/";
    $files = scandir($dir, 1);
    $length = count($files) - 2;

    return $files[rand(0, $length)];
}

function getBackground() {
    $dir = "images/";
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
    <body style="background-image: url('images/<?php echo getBackground(); ?>')">
        <audio autoplay="">
            <source src="songs/<?php echo getSongs(); ?>">
        </audio>
    </body>
</html>
