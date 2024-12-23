<?php
function table($a){
    for($i=1;$i<=10;$i++){
        echo $a*$i."<br>";
    }
}
table($_GET['number']);
?>
<form action="">
    <input type="number" name="number" placeholder="Enter your name">
    <input type="submit" name="submit">
    
</form>