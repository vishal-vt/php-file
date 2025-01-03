
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            width: 100%;
            border-collapse: collapse;
        }
        th,td{
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th{
            background-color:rgb(203, 58, 58);
        }
        td{
            background-color: rgb(205, 152, 152);
        }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Create_At</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        <?php
        $connection = mysqli_connect("localhost", "root", "","app25");
        $sql = "SELECT * FROM single";
        $result = mysqli_query($connection, $sql);
        if(mysqli_num_rows($result) > 0){
            while($record = mysqli_fetch_assoc($result)){
        ?>
        <tr>
        <td scope="row"><?php echo $record['id']; ?></td>
            <td><?=$record['name']?></td>
            <td><?=$record['create_at']?></td>
            <td><a href="update1.php?id=<?=$record['id']?>">Update</a></td>
            <td><a href="delete1.php?id=<?=$record['id']?>">Delete</a></td>
        </tr>
        <?php
            }
        }
        ?>
    </table>
</body>
</html>