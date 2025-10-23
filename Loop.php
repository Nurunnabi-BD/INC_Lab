<?php

echo "For Loop " ."<br>";
$x=0;
for($i=0; $i<10; $i++)
{
    $x+=10;
    echo $x."<br>";
}
echo "Do While Loop " ."<br>";
do {
    $x+=10;
    echo $x."<br>";
} while ($x < 200);
echo "While Loop " ."<br>";
while($x<300)
{
    $x+=10;
    echo $x."<br>";
}
echo "For Each Loop " ."<br>";
$dept=array("CSE", "LAW", "ENGLISH", "BBA");
foreach ($dept as $y) {
    echo $y."<br>";
}
?>