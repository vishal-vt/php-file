<!DOCTYPE html>
<html>
<head>
    <title>Colorful Table</title>
    <style>
        body{
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
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
            margin-left: 45%;
        }
    </style>
</head>
<body>

<h2>COMPLETE DATA</h2>

<table>
    
    <tr>
        <th>#id</th>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>phone</th>
        <th>email</th>
        <th>Action</th>
    </tr>
    <tbody>
        <?php
        $connection = mysqli_connect("localhost", "root", "","cr");
        $sql = "SELECT * FROM crud";
        $result = mysqli_query($connection, $sql);
        if(mysqli_num_rows($result) > 0){
            while($record = mysqli_fetch_assoc($result)){
        ?>
    <tr>
        <td scope="row"><?php echo $record['id']; ?></td>
        <td><?=$record['fname']?></td>
        <td><?=$record['lname']?></td>
        <td><?=$record['phone']?></td>
        <td><?=$record['email']?></td>
        <td>
            <a href="delete.php?id=<?=$record['id']?>" class="btn btn-danger">Delete</a>
        </td>
    </tr>
    <?php
            }
        }
        ?>
</table>
<br>
<a href ="createform.php" class="btn btn-primary">Create</a>

</body>
</html>