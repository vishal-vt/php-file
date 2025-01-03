<?php
$con = mysqli_connect('localhost', 'root', '', 'app25');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $sql = "UPDATE single SET name='$name' WHERE id=$id";

    if (mysqli_query($con, $sql)) {
        echo "<script>
        alert('Data updated successfully');
        window.location.href='read1.php';
        </script>";
    }
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM single WHERE id=$id";
    $single = mysqli_query($con, $sql);

    if (mysqli_num_rows($single) > 0) {
        $res = mysqli_fetch_assoc($single);
    } else {
        header('location:read1.php');
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
        input[type="text"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
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
        <div class="header">Update Form</div>
        
        <form action="read1.php" method="post">
            <input type="hidden" name="id" value="<?php echo isset($res['id']) ? $res['id'] : ''; ?>">

            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" value="<?php echo isset($res['name']) ? $res['name'] : ''; ?>" required>
            </div>

            <button type="submit">Update</button>
        </form>
    </div>
</body>
</html>
