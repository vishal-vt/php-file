<?php
$data=fopen("test.txt","r");
echo fread($data,filesize("test.txt"));
fclose($data);
?>