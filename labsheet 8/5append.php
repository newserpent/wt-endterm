<?php
$myfile = fopen('webdic.txt', 'a') or die('unable to open file!');
$txt = 'donald duck\n';
fwrite($myfile, $txt);
$txt = 'harshith';
fwrite($myfile, $txt);
fclose($myfile);
?>