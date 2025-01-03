<!DOCTYPE html>
<html>
<head>
    <title>Colorful Table</title>
    <style>
        body{
            font-family: Arial, sans-serif;
        }
        table {
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 15px;
            text-align: left;
        }
        th {
            background-color:rgb(243, 120, 26);
            color: white;
        }
        tr:nth-child(even) {
            background-color:rgb(157, 160, 222);
        }
        tr:hover {
            background-color: #ddd;
        }
        h2 {
            text-align: center;
            margin-top: 40px;
            margin-bottom: 40px;
            color: skyblue;
        }
        a {
            text-decoration: none;
            color: white;
            background-color: #f44336;
            padding: 10px 20px;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<h2>COMPLETE DATA</h2>

<table>
    <tr>
        <th>#id</th>
        <th>fullName</th>
        <th>dob</th>
        <th>email</th>
        <th>mobile</th>
        <th>gender</th>
        <th>occupation</th>
        <th>issueDate</th>
        <th>issueState</th>
        <th>expire</th>
        <th>update</th>
        <th>delete</th>
    </tr>
    <tbody>
        <?php
        $connection = mysqli_connect("localhost", "root", "","app25");
        $sql = "SELECT * FROM home";
        $result = mysqli_query($connection, $sql);
        if(mysqli_num_rows($result) > 0){
            while($record = mysqli_fetch_assoc($result)){
        ?>
        <tr>
            <td scope="row"><?php echo $record['id']; ?></td>
            <td><?=$record['fullName']?></td>
            <td><?=$record['dob']?></td>
            <td><?=$record['email']?></td>
            <td><?=$record['mobile']?></td>
            <td><?=$record['gender']?></td>
            <td><?=$record['occupation']?></td>
            <td><?=$record['issueDate']?></td>
            <td><?=$record['issueState']?></td>
            <td><?=$record['expire']?></td>
            <td>
                <a href="update.php?id=<?=$record['id']?>" class="btn btn-danger">Update</a>
            </td>
            <td>
                <a href="delete.php?id=<?=$record['id']?>" class="btn btn-danger">Delete</a>
            </td>
        </tr>
        <?php
            }
        }
        ?>
    </tbody>
</table>
<br>
<a href ="create.php" class="btn btn-primary">Create</a>

</body>
</html>