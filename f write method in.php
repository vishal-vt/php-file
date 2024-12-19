<?php
$res = fopen("demo.txt",'w');
$data = "f write fun. is usedb to create a file and write some text inside create file ";
fwrite($res,$data);
fclose($res);
?>