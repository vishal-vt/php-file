
<?php
for ($i=0; $i<=9;$i++){
   
        for ($j=0; $j<=9;$j++){
         
        if($i==9 && $j==9){
            echo $i,$j;
        }
        else{
            echo $i ."".$j.",";
        }
    }
 
   echo " <br>";
}

?>




