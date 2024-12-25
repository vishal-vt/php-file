<form action="mobile-num-validation2.php" method="post">
   name:<input type="text" name="name"/>
   <small style="color:red;"><?= isset($_GET['nameerror'])? $_GET['nameerror'] : ''?></small>
   email:<input type="text" name="email">
   <small style="color:red;"><?= isset($_GET['emailerror'])? $_GET['emailerror'] : ''?></small>
  mobile:<input type="number" name="mobile">
   <small style="color:red;"><?= isset($_GET['mobileerror'])? $_GET['mobileerror'] : ''?></small>
    <input type="submit" name="validate" value="validation">
</form>