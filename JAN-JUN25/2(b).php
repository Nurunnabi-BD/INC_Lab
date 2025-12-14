<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="2(b).php" method="POST">
        <label for="">User Name: </label>
        <input type="text" name="name"><br><br>
        <button name="btn">Submit</button>
    </form>
    <?php 
    if(isset($_POST["btn"])){
        $name=$_POST["name"];
        echo "$name<br>";
    }
    ?>


</body>

</html>