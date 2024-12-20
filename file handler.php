<?php
$res = fopen("topi.avif",'r');
$photo = fread($res,filesize("topi.avif"));
$dest = fopen("cap.jpg",'w');
fwrite($dest,$photo);
fclose($dest);
fclose($res);