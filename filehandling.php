<?php
    
//file Create and Write
$file=fopen("newfile.text","w");
$text="My Name is Nurunnabi.";
fwrite($file,$text);

//first read file.
$file=fopen("newfile.text","r");
echo fread($file,filesize("newfile.text")) ."<br>";
fclose($file);

//Second file read.
$file=fopen("newfile.text","r");
while(!feof($file))
{
    echo fgets($file) ."<br>";
}
fclose($file);
?>