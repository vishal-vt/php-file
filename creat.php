<?php
    $con = mysqli_connect('localhost','root','','cr');
    if($_SERVER['REQUEST_METHOD']=='POST'){
        if(empty($_POST['username'])){
            echo "<script>
            alert('username field required');
            </script>";
        }elseif(empty($_POST['dob'])){
            echo "<script>
            alert('date of birth field required');
            </script>";
        }elseif(empty($_POST['gender'])){
            echo "<script>
            alert('gender field required');
            </script>";
        }elseif(empty($_POST['country'])){
            echo "<script>
            alert('country field required');
            </script>";
        }elseif(empty($_POST['subject'])){
            echo "<script>
            alert('subject field required');
            </script>";
        }elseif(empty($_POST['desc'])){
            echo "<script>
            alert('description field required');
            </script>";
        }else{
            $username = $_POST['username'];
            $dob = $_POST['dob'];
            $gender = $_POST['gender'];
            $country = $_POST['country'];
            $subject = implode(",", $_POST['subject']);
            $desc = $_POST['desc'];
            $sql="insert into all_field(username,dob,gender,country,subject,description) values('$username','$dob','$gender','$country','$subject','$desc')";
            if(mysqli_query($con,$sql)){
                echo "<script>
                alert('Data inserted successfully');
                window.location.href='read.php';
                </script>";
            }
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
        <div class="header">Registration</div>
        
        <form action="creat.php" method="post">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" >
            </div>

            <div class="form-group">
                <label for="dob">Date of Birth:</label>
                <input type="text" id="dob" name="dob">
            </div>

            <div class="form-group">
                <label>Gender:</label>
                <div class="gender-options">
                    <label><input type="radio" name="gender" value="male" > Male</label>
                    <label><input type="radio" name="gender" value="female" > Female</label>
                </div>
            </div>

            <div class="form-group">
                <label for="country">Country:</label>
                <select id="country" name="country" >
                    <option value="">-- Select Your Country --</option>
                    <option value="usa">United States</option>
                    <option value="uk">United Kingdom</option>
                    <option value="canada">Canada</option>
                    <option value="india">India</option>
                </select>
            </div>

            <div class="form-group">
                <label>Subject:</label>
                <div class="subject-options">
                    <label><input type="checkbox" name="subject[]" value="math"> Math</label>
                    <label><input type="checkbox" name="subject[]" value="science"> Science</label>
                    <label><input type="checkbox" name="subject[]" value="history"> History</label>
                </div>
            </div>

            <div class="form-group">
                <label for="description">Description:</label>
                <textarea id="description" name="desc" rows="4" placeholder="Write a short description..."></textarea>
            </div>

            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>

