<form action="radio-validation2.php" method="post">
    <select id="select" name="select">
        <option value="">country</option>
        <option value="india">india</option>
        <option value="canada">canada</option>
        <option value="usa">usa</option>
        <option value="thailand">thailand</option>
        <option value="ukrane">ukrane</option>
    </select>
    <small style="color:red;"><?= isset($_GET['countryerror'])? $_GET['countryerror'] : ''?></small>
    <br> 
   male  <input type="radio" id="option" name="male" value="option1"> 
   female <input type="radio" id="option" name="female" value="option2">
    <small style="color:red;"><?= isset($_GET['gendererror'])? $_GET['gendererror'] : ''?></small>

    
    <input type="submit" value="Submit" name="submit">
</form>
