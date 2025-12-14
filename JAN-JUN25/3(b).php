<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="3(b).php" method="post">
        <label for="">Name: </label>
        <input type="text" name="name"><br><br>
        <label for="">Email: </label>
        <input type="email" name="email"><br><br>
        <label for="">Phone Number: </label>
        <input type="number" name="number" id=""><br><br>
        <button name="btn">Submit</button><br><br>


        <?php 
        if(isset($_POST["btn"]))
        {
            $name=$_POST["name"];
            $mail=$_POST["email"];
            $number=$_POST["number"];
            echo "Name: ". $name."<br>";
            echo "Email: ". $mail."<br>";
            echo "Number: ". $number."<br>";
        }
        ?>
    </form>
</body>
</html>