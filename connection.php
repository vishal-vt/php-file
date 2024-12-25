<?php
// // mysqli_connect() function opens a new connection to the MySQL server.
// // $connection = mysqli_connect("localhost", "root", "", "demo");
// // syntax of mysqli_connect(host,username:password,database);

$connection = mysqli_connect("localhost", "root", "", "app25");
// if($connection){
//     echo "Connected";
// }
// else{
//     echo "Not connected";
//     echo mysqli_connect_error();
// }

// // $sql = " Create table student(
// //     id int(11) auto_increment primary key,
// //     name varchar(50) ,
// //     email varchar(50) ,
// //     mobile varchar(50),
// //     address varchar(50) )";
// //     echo mysqli_query($connection,$sql);

// $sql = "insert into student(name,email,mobile,address) values('gauracv','hsdyusdgh@gmail','783483464','africa')";
// if(mysqli_query($connection,$sql)){
//     echo "Data inserted";
// }
// else{
//     echo "Data not inserted";
//     echo mysqli_error($connection);
// }
// echo mysqli_query($connection,$sql);

$sql = "insert into student(name,email,mobile,address) values('rahul','hsdyusdgh@gmail','9140044736','govinda')";
if(mysqli_query($connection,$sql)){
    echo mysqli_insert_id($connection);
}
    ?>