<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="calculator.php">
        <label for="">Enter a number: </label>
        <input  type="number" name="num1"><br>
        <label for="">Enter a number: </label>
        <input  type="number" name="num2"><br>
        <button name="add">ADD</button>
        <button name="sub">Sub</button>
        <button name="mul">Multiply</button>
        <button name="div">Division</button>
    </form>
    <?php
    if(isset($_POST["add"])) {
        $x=$_POST["num1"];
        $y=$_POST["num2"];
        $z=$x+$y;
        echo "After Addition: ".$z;
    }
    if(isset($_POST["sub"])) {
        $x=$_POST["num1"];
        $y=$_POST["num2"];
        $z=$x-$y;
        echo "After Subtraction: ".$z;
    }
    if(isset($_POST["mul"])) {
        $x=$_POST["num1"];
        $y=$_POST["num2"];
        $z=$x*$y;
        echo "After Multiplication: ".$z;
    }
    if(isset($_POST["div"])) {
        $x=$_POST["num1"];
        $y=$_POST["num2"];
        $z=$x/$y;
        echo "After Divition: ".$z;
    }
    ?>
</body>
</html>