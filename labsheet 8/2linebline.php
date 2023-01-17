<?php
$myfile = fopen('webdic.txt', 'r') or die('unable to open file!');
while(!feof($myfile)){
  echo fgets($myfile) . '<br/>';
}
fclose($myfile);
?>