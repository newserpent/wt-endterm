<?php
$myfile=fopen('webdic.txt', 'r') or die('unable to open file!');
echo fread($myfile,filesize('webdic.txt'));
fclose($myfile);
?>