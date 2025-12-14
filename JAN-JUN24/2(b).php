<?php
$n = 13;
if ($n <= 1)
{
    echo "Not Prime.";
}else{
    $isprime=true;
    for($i=2; $i<=sqrt($n); $i++)
    {
        if($n%$i==0)
        {
            $isprime=false;
            break;
        }
    }
    if($isprime)
    {
        echo "Prime";
    }else{
        echo "Not Prime";
    }
}