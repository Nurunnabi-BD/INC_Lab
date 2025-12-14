<?php
$file=fopen("newfile.text", "w");
$text="BGC Trust Univercity Bangladesh";
fwrite($file,$text);
fclose($file);
$file=fopen("newfile.text", "r");
while(!feof($file))
{
   echo fgets($file)."<br>";
}
fclose($file);
?>