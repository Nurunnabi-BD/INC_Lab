<?php
$mid_num=array(array("INC",16), array("CA",15), array("CSA",12),array("NA",16),array("MATH-IV",15),array("HEB",14));

for ($i=0; $i < 6; $i++) {
    echo "<ul>";
    for ($j=0; $j < 2; $j++) { 
        echo "<li>" .$mid_num[$i][$j]."</li>";
    }
    echo "</ul>";
}

foreach ($mid_num as $x) {
    foreach ($x as $y) {
        echo $y."<br>";
    }
}



?>