<?php

$num1=10;
$num2=20;
$num3=30;

if($num1>$num2 && $num1>$num3)
{
    echo $num1."Largest number.";
}

else if($num2>$num1 && $num1>$num3)
{
    echo $num2."Largest number.";
}

else 
{
    echo $num3."Largest number.";
}

?>