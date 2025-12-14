<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="3(a).php" method="post">
        <label for="">Enter Number:</label>
        <input type="number" name="num"><br><br>
        <button name="btn">Submit</button>
    </form>
    <?php 
    if(isset($_POST["btn"])){
        $num=$_POST["num"];
        if($num>=60)
        {
            echo "First Division.";
        }else if($num>=45 && $num<=69)
        {
            echo "Second Division.";
        }else if($num>=33 && $num<=44)
        {
            echo "Third Division.";
        }else{
            echo "Fail.";
        }
    }
    ?>
</body>
</html>