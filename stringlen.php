<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="stringlen.php">
        <label>Enter a String</label>
        <input name="st" type="text"><br><br>
        <button name="btn">Submit</button><br><br>
    </form>



    <?php
    if(isset($_POST["btn"]))
    {
        $str=$_POST["st"];
        $x=strlen($str);
        echo "This string lenght is: $x<br>";
    }



    ?>
</body>
</html>