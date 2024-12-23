<form action="" method="post">
    <div>
    <select name="country" id="">
        <option value="">--select country</option>
        <option value="india">india</option>
        <option value="china">china</option>
        <option value="japan">japan</option>
        <option value="usa">usa</option>
        <option value="russia">russia</option>
    </select>
    </div>
    <div>
        <input type="radio" name="gender" value="male"> Male
        <input type="radio" name="gender" value="female">Female
        <input type="color" name="color">
    </div>
        <input type="submit" value="submit">
</form>
<div style="height: 200px; width: 100%; background: <?=$_POST['color']?">></div>
