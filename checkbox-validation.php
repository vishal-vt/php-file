
    <form action="checkbox-validation2.php" method="post">
      <input type="checkbox" name="subject[]" value="mohan"> mohan<br>
       <input type="checkbox" name="subject[]" value="sohan"> sohan<br>
        <input type="checkbox" name="subject[]" value="rajan"> rohan<br>
        <small style="color:red;"><?= isset($_GET['checkboxerror'])? $_GET['checkboxerror'] : ''?></small>
        <input type="submit" value="Submit" name="validate">
    </form>
