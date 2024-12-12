<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <select name="" id="">
        <option value="">Select Country</option>
        <?php
        $country =["INDIA","AFGANISTAN","AUSTRALIA","CHINA","SOUTH KORIA ","RUSSIA"];
        foreach($country as $value){
            echo "<option value=''>$value</option>";
        }
        ?>
    </select>
    </center>
</body>
</html>