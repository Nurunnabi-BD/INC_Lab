<?php
$temp=array(78, 60, 62, 68, 74, 68, 73, 85, 66, 64, 76, 63, 75, 76,73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73);
$sum=0;
for ($i=0; $i < 30; $i++) { 
    $sum+=$temp[$i];
}
$avg=$sum/30;
echo "Avarage of this array: $avg<br>";
sort($temp);
$lowest=array_slice($temp,0,5);
foreach($lowest as $x){
    echo $x. " ";
}
echo "<br>";
$highest=array_slice($temp,-5,5);
foreach($highest as $x){
    echo $x. " ";
}
echo "<br>";
?>