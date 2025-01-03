<?php
$con = mysqli_connect('localhost','root','','app25');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['fullName'])) {
        echo "<script>
        alert('Full name field required');
        </script>";
    } elseif (empty($_POST['dob'])) {
        echo "<script>
        alert('Date of birth field required');
        </script>";
    } elseif (empty($_POST['email'])) {
        echo "<script>
        alert('Email field required');
        </script>";
    } elseif (empty($_POST['mobile'])) {
        echo "<script>
        alert('Mobile number field required');
        </script>";
    } elseif (empty($_POST['gender'])) {
        echo "<script>
        alert('gender field required');
         </script>";
    } elseif (empty($_POST['occupation'])) {
        echo "<script>
        alert('occupation field required');
        </script>"; 
    } elseif (empty($_POST['issueDate'])) {
        echo "<script>
        alert('issue date field required');
        </script>";
    } elseif (empty($_POST['issueState'])) {
        echo "<script>
        alert('issue state field required');
        </script>";
    } elseif (empty($_POST['expire'])) {
        echo "<script>
        alert('expiry date field required');
        </script>";
    } else {
        $fullName = $_POST['fullName'];
        $dob = $_POST['dob'];
        $email = $_POST['email'];
        $mobile = $_POST['mobile'];
        $gender = $_POST['gender'];
        $occupation = $_POST['occupation'];
        $issueDate = $_POST['issueDate'];
        $issueState = $_POST['issueState'];
        $expire = $_POST['expire'];
        $sql = "insert into home(fullName,dob,email,mobile,gender,occupation,issueDate,issueState,expire) values('$fullName','$dob','$email','$mobile','$gender','$occupation','$issueDate','$issueState','$expire')";
        if (mysqli_query($con, $sql)) {
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
            background-color: #3366FF;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .form-container {
            background: #fff;
            border-radius: 8px;
            padding: 20px 30px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 400px;
        }
        .form-container h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
        }
        .form-group input,
        .form-group select {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
            width: 100%;
        }
        .form-group input:focus,
        .form-group select:focus {
            border-color: #3366FF;
            outline: none;
        }
        .form-group .radio-group {
            display: flex;
            gap: 10px;
        }
        .radio-group label {
            font-weight: normal;
        }
        .btn-container {
            text-align: center;
        }
        .btn-container button {
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            background-color: #3366FF;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }
        .btn-container button:hover {
            background-color: #274B91;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Registration</h2>
        <form action="create.php" method="post">
            <h3>Personal Details</h3>
            <div class="form-group">
                <label for="fullName">Full Name</label>
                <input type="text" id="fullName" name="fullName" placeholder="Enter your name">
            </div>
            <div class="form-group">
                <label for="dob">Date of Birth</label>
                <input type="date" id="dob" name="dob">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter your email">
            </div>
            <div class="form-group">
                <label for="mobile">Mobile Number</label>
                <input type="tel" id="mobile" name="mobile" placeholder="Enter mobile number">
            </div>
            <div class="form-group">
                <label>Gender</label>
                <div class="radio-group">
                    <label><input type="radio" name="gender" value="Male"> Male</label>
                    <label><input type="radio" name="gender" value="Female"> Female</label>
                    <label><input type="radio" name="gender" value="Other"> Other</label>
                </div>
            </div>
            <div class="form-group">
                <label for="occupation">Occupation</label>
                <input type="text" id="occupation" name="occupation" placeholder="Enter occupation">
            </div>
            <h3>Identity Details</h3>
            <div class="form-group">
                <label for="issueDate">Issue Date</label>
                <input type="date" id="issueDate" name="issueDate">
            </div>
            <div class="form-group">
                <label for="issueState">Issue State</label>
                <select id="issueState" name="issueState">
                    <option value="" disabled selected>Select state</option>
                    <option value="State1">India</option>
                    <option value="State2">Japan</option>
                    <option value="State3">Bhutan</option>
                    <option value="State4">Nepal</option>
                </select>
            </div>
            <div class="form-group">
                <label for="expiryDate">Expiry Date</label>
                <input type="date" id="expiryDate" name="expire">
            </div>
            <div class="btn-container">
               <input type="submit" value="Submit">
            </div>
        </form>
    </div>
</body>
</html>

