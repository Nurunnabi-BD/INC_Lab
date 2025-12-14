<?php
$con=new mysqli("localhost", "root", "", "new");
if(!$con)
{
    echo "Connect fail";
}else{
    // $sql="create database new";
    // if($con->query($sql)==true)
    // {
    //     echo "database create success.";
    // }else{
    //     echo "database create fail.";
    // }
    // $sql="create table info(name varchar(50), id int, telephone int)";
    // if($con->query($sql)==true)
    // {
    //     echo "table create success.";
    // }else{
    //     echo "table create fail.";
    // }
    // $sql="insert into info values('Tanni', 1, 01819898989);";
    // $sql.="insert into info values('Somun', 2, 01818989898);";
    // $sql.="insert into info values('Suhana', 3, 01825252525)";
    // if($con->multi_query($sql)==true)
    // {
    //     echo "Multiple data insert success.";
    // }else{
    //     echo "Multiple data insert fail.";
    // }
    $sql="update info set name='Shirin' where id='3'";
    if($con->query($sql)==true)
    {
        echo "Data Update success.";
    }else{
        echo "Data Update fail.";
    }
}
?>