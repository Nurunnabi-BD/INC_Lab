<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="4(a).php" method="post">
        <label for="">Employee Name: </label>
        <input type="text" name="name" id=""><br><br>
        <label for="">Email: </label>
        <input type="email" name="mail"><br><br>
        <label for="">Number: </label>
        <input type="number" name="number"><br><br>
        <button name="btn">Submit</button><br><br>

        <?php 
        $server="localhost";
        $username="root";
        $password="";
        $db="user";
        $con=new mysqli($server, $username,$password,$db);
        if(!$con)
        {
            echo "Server Connect fail";
        }else{
            // $sql="create database user";
            // if($con->query($sql)==true)
            // {
            //     echo "database create Success.";
            // }else{
            //     echo "database create fail.";
            // }
            // $sql="create table user_info(Id int, name varchar(50), mail varchar(50), number int)";
            // if($con->query($sql)==true)
            // {
            //     echo "table create successfuly.";
            // }
            // else{
            //     echo "table create fail.";
            // }
            if(isset($_POST["btn"])){
                $name=$_POST["name"];
                $mail=$_POST["mail"];
                $number=$_POST["number"];
                $sql="insert into user_info values(1, '$name','$mail','$number')";
                if($con->query($sql)==true)
                {
                    echo "data insert success.";
                }else{
                    echo "data insert fail.";
                }
            }
        }
        ?>
    </form>
</body>
</html>