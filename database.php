<?php
$servername="localhost";
$username="root";
$password="";
$db_name="nurunnabi";
$con=new mysqli($servername, $username, $password,$db_name);
if(!$con)
{
    echo "Fail to connect!";
 }else{
    echo "Connect Successfully";

    $sql="insert into nurunnabi_info values(38, 'nurunnabi5572@gmail.com', 01568490775)";
    if($con->query($sql)==true)
    {
      echo "Dtabase has been create Successfuly ";
    }else{
      echo "Dtabase not created";
    }
 }

?>