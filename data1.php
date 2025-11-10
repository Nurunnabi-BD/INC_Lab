<?php

$servername = "localhost";
$username = "root";
$password = "";
$db_name = "israt";
$con=new mysqli($servername,$username,$password,$db_name);

// if(!$con){
//     echo "database not connected";
// }
// else{
//     echo "database connected successfully";
// }

// if(!$con){
//     echo "database not connected";
// }
// else{
//     $sql = "create database israt";
//     if($con->query($sql)==true){
//         echo "database create successfully";
//     }
//     else{
//         echo "fail to create database";
//     }
// }
// if(!$con){
//     echo "database not connected";
// }
// else{
//     echo "Connected successfully";
//     $sql="create table israt(Id int,Name varchar(50),Email varchar(50))";
//     if($con->query($sql)==true){
//         echo "table create successfully";
//     }
//     else{
//         echo "fail to create table";
//     }
// }
if(!$con){
    echo "database not connected";
}
else{
    $sql = "insert into israt values('240242004', 'Israt jahan', 'ij45@gmail.com')";
    if($con->query($sql)==true){
        echo "value insert successfully";
    }
    else{
        echo "fail to insert value";
    }
}
?>