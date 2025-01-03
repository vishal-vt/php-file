<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(empty($_POST['name'])){
        echo "<script>
        alert('Name field required');
        </script>";
    }else{  
        $name = $_POST['name'];
        $connection = mysqli_connect('localhost', 'root', '', 'app25');
        $sql = "insert into single(name) values('$name')";

        if(mysqli_query($connection, $sql)){
            echo "<script>
            alert('Data inserted successfully');
            window.location.href='read1.php';
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
        
        <form action="create1.php" method="post">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" >
            </div>

            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>

