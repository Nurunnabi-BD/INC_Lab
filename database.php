<?php
$servername="localhost";
$username="root";
$password="";
$con=new mysqli($servername, $username, $password);
if(!$con)
{
    echo "Fail to connect!";
 }else{
    echo "Connect Successfully";
 }

?>