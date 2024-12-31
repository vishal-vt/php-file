<?php
$con = mysqli_connect('localhost','root','','app25');
if($_SERVER['REQUEST_METHOD']=='POST'){
    $id = $_POST['uid'];
    $fullName = $_POST['fullName'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $gender = $_POST['gender'];
    $occupation = $_POST['occupation'];
    $issueDate = $_POST['issueDate'];
    $issueState = $_POST['issueState'];
    $expire = $_POST['expire'];
    $sql="UPDATE home SET fullName='$fullName', dob='$dob', email='$email', mobile='$mobile', gender='$gender', occupation='$occupation', issueDate='$issueDate', issueState='$issueState', expire='$expire' WHERE id=$id";
    if(mysqli_query($con,$sql)){
        echo "<script>
        alert('Data updated successfully');
        window.location.href='read.php';
        </script>";
    }
}
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql="SELECT * FROM home WHERE id=$id";
    $single = mysqli_query($con,$sql);
    if(mysqli_num_rows($single)>0){
        $res = mysqli_fetch_assoc($single);
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
        input[type="text"], input[type="date"], input[type="email"], input[type="tel"], select, textarea {
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
                <label for="fullName">Full Name:</label>
                <input type="text" id="fullName" value="<?=$res['fullName']?>" name="fullName" >
            </div>

            <div class="form-group">
                <label for="dob">Date of Birth:</label>
                <input type="date" id="dob" value="<?=$res['dob']?>" name="dob">
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" value="<?=$res['email']?>" name="email">
            </div>

            <div class="form-group">
                <label for="mobile">Mobile Number:</label>
                <input type="tel" id="mobile" value="<?=$res['mobile']?>" name="mobile">
            </div>

            <div class="form-group">
                <label>Gender:</label>
                <div class="gender-options">
                    <label><input type="radio" name="gender" <?= $res['gender']=='Male'?'checked':''?> value="Male" > Male</label>
                    <label><input type="radio" name="gender" <?= $res['gender']=='Female'?'checked':''?> value="Female" > Female</label>
                    <label><input type="radio" name="gender" <?= $res['gender']=='Other'?'checked':''?> value="Other" > Other</label>
                </div>
            </div>

            <div class="form-group">
                <label for="occupation">Occupation:</label>
                <input type="text" id="occupation" value="<?=$res['occupation']?>" name="occupation">
            </div>

            <div class="form-group">
                <label for="issueDate">Issue Date:</label>
                <input type="date" id="issueDate" value="<?=$res['issueDate']?>" name="issueDate">
            </div>

            <div class="form-group">
                <label for="issueState">Issue State:</label>
                <select id="issueState" name="issueState">
                    <option value="" disabled>Select state</option>
                    <option <?=$res['issueState']=='India'?'selected':''?> value="India">India</option>
                    <option <?=$res['issueState']=='Japan'?'selected':''?> value="Japan">Japan</option>
                    <option <?=$res['issueState']=='Bhutan'?'selected':''?> value="Bhutan">Bhutan</option>
                    <option <?=$res['issueState']=='Nepal'?'selected':''?> value="Nepal">Nepal</option>
                </select>
            </div>

            <div class="form-group">
                <label for="expiryDate">Expiry Date:</label>
                <input type="date" id="expiryDate" value="<?=$res['expire']?>" name="expire">
            </div>

            <button type="submit">Update</button>
        </form>
    </div>
</body>
</html>

