<?php
$con = mysqli_connect('localhost','root','','cr');
if($_SERVER['REQUEST_METHOD']=='POST'){
    $id = $_POST['uid'];
    $username = $_POST['username'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $country = $_POST['country'];
    $subject = implode(",", $_POST['subject']);
    $desc = $_POST['desc'];
    $sql="update all_field set username='$username', dob='$dob', gender='$gender', country='$country', subject='$subject', description='$desc' where id=$id";
    if(mysqli_query($con,$sql)){
        echo "<script>
        alert('Data updated successfully');
        window.location.href='read.php';
        </script>";
    }
}
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql="select * from all_field where id=$id";
    $single = mysqli_query($con,$sql);
    if(mysqli_num_rows($single)>0){
        $res = mysqli_fetch_assoc($single);
        $subject = explode(',',$res['subject']);
    }else{
        header('location:read.php');
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .registration-container {
            background-color: #e9ecef;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 400px;
            padding: 20px;
        }
        .header {
            text-align: center;
            background-color: #12232E;
            color: #ffffff;
            padding: 10px;
            border-radius: 10px 10px 0 0;
            font-size: 1.5em;
        }
        .form-group {
            margin: 15px 0;
        }
        label {
            display: block;
            font-size: 0.9em;
            margin-bottom: 5px;
        }
        input[type="text"], input[type="date"], select, textarea {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .gender-options, .subject-options {
            display: flex;
            gap: 10px;
        }
        .gender-options label, .subject-options label {
            display: flex;
            align-items: center;
        }
        button {
            width: 100%;
            padding: 10px;
            background-color: #12232E;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            font-size: 1em;
            cursor: pointer;
        }
        button:hover {
            background-color: #0b1c26;
        }
    </style>
</head>
<body>

    <div class="registration-container">
        <div class="header">Update Registration</div>
        
        <form action="update.php" method="post">
            <div class="form-group">
                <input type="hidden" value="<?=$res['id']?>" name="uid">
                <label for="username">Username:</label>
                <input type="text" id="username" value="<?=$res['username']?>" name="username" >
            </div>

            <div class="form-group">
                <label for="dob">Date of Birth:</label>
                <input type="text" id="dob" value="<?=$res['dob']?>" name="dob">
            </div>

            <div class="form-group">
                <label>Gender:</label>
                <div class="gender-options">
                    <label><input type="radio" name="gender" <?= $res['gender']=='male'?'checked':''?> value="male" > Male</label>
                    <label><input type="radio" name="gender" <?= $res['gender']=='female'?'checked':''?> value="female" > Female</label>
                </div>
            </div>

            <div class="form-group">
                <label for="country">Country:</label>
                <select id="country" name="country" >
                    <option value="">-- Select Your Country --</option>
                    <option <?=$res['country']=='usa'?'selected':''?> value="usa">United States</option>
                    <option <?=$res['country']=='uk'?'selected':''?> value="uk">United Kingdom</option>
                    <option <?=$res['country']=='canada'?'selected':''?> value="canada">Canada</option>
                    <option <?=$res['country']=='india'?'selected':''?> value="india">India</option>
                </select>
            </div>

            <div class="form-group">
                <label>Subject:</label>
                <div class="subject-options">
                    <label><input type="checkbox" name="subject[]" value="math" <?= in_array('math', $subject) ? 'checked' : '' ?>> Math</label>
                    <label><input type="checkbox" name="subject[]" value="science" <?= in_array('science', $subject) ? 'checked' : '' ?>> Science</label>
                    <label><input type="checkbox" name="subject[]" value="history" <?= in_array('history', $subject) ? 'checked' : '' ?>> History</label>
                </div>
            </div>

            <div class="form-group">
                <label for="description">Description:</label>
                <textarea id="description" name="desc" rows="4" placeholder="Write a short description..."><?=$res['description']?></textarea>
            </div>

            <button type="submit">Update</button>
        </form>
    </div>
</body>
</html>

