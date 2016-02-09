<?php

function getFiles($dir) {
    if (file_exists($dir) && count($files = scandir($dir)) > 2) {
        return $dir . "/" . $files[rand(0, (count($files) - 3))];
    } else {
        return null;
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Taylor Swift</title>
    </head>
    <body style="background-image: url('<?php echo getFiles("images"); ?>'); background-repeat: no-repeat; background-size: cover">
        <audio autoplay="">
            <source src="<?php echo getFiles("songs"); ?>">
        </audio>
    </body>
</html>
