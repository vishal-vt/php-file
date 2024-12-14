<?php
// <---------------------do not return befor exicution----------------> 
function hllo(){
   for($i=0;$i<10;$i++){
    $a[] = $i;
   }
   return $a;
}
hllo();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br>
    <?php
    hllo();
    ?>
    
</body>
</html>