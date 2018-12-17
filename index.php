<?php

function getFiles($dir) {
    // Check that dir exists and that ther are files in it
    if (file_exists($dir) && count($files = scandir($dir)) > 2) {
      $file = $files[rand(0, (count($files) - 1))];
      // Make sure the chosen file isn't a directory
      if(!is_dir($file))
        return $dir . '/' . $file;
      else
        getFiles($dir);
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
    <body style="background-image: url('<?php echo getFiles('images') ?>'); background-repeat: no-repeat; background-size: cover">
        <div>
            <input type="range" id="inputvolume" onchange="setVolume()" min="0" max="10">
        </div>
        <audio autoplay="" id="audioelement">
            <source src="<?php echo getFiles('songs') ?>">
        </audio>
        <script>
            var song = document.getElementById("audioelement");
            song.addEventListener("ended", function () {
                setTimeout(reloadPage, 2000);
            });

            function reloadPage() {
                location.reload();
            }

            function setVolume() {
                var valueinput = document.getElementById("inputvolume").value;
                valueinput = (valueinput / 10);
                document.getElementById("audioelement").volume = valueinput;
            }
        </script>
    </body>
</html>
