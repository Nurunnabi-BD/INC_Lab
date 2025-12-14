<?php
$con=new mysqli("localhost", "root", "", "nurunnabi");
if(!$con)
{
    echo "Connect fail";
}else{
    // $sql="create database nurunnabi";
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
    $sql="delete from info where id=3";
    if($con->query($sql)==true)
    {
        echo "Data delete success.";
    }else{
        echo "Data delete fail.";
    }
}
?>