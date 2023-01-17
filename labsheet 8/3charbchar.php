<?php
$myfile = fopen('webdic.txt', 'r') or die('unable to open file!');
while(!feof($myfile)){
  echo fgetc($myfile).'<br>';
}
fclose($myfile);
?>