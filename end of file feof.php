<?php
$data=fopen("test.txt","r");
while(!feof($data)){
    echo fgetc($data);
}
fclose($data);
?>