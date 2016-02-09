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
	<div>
		<input type="range" id="inputvolume" onchange="setVolume()" min="0" max="10">
	</div>
        <audio autoplay="">
            <source src="<?php echo getFiles("songs"); ?>">
        </audio>
	<script>
		function setVolume() {
			var valueinput = document.getElementById("inputvolume").value;
			valueinput = (valueinput/10);
			document.getElementById("audioelement").volume = valueinput;
		}
	</script>
    </body>
</html>
