<?php
$myfile = fopen('webdic.txt', 'w') or die('unable to open file!');
$txt = 'john williams ';
fwrite($myfile, $txt);
fclose($myfile);
?>