<?php
$data=fopen("test.txt","r");
echo fgets($data);
echo fgetc($data);
fclose($data);
?>