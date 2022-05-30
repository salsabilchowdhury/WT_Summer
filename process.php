<?php 
$numA= $_POST["num1"];
$numB= $_POST["num2"];
$number1=(float)$numS;
$number2=(float)$numZ;
$up=$_POST["sign"];
if($up=="+")
{
    echo $number1 + $number2;
}
else if($up=="-")
{
    echo $number1 - $number2;
}
else if($up=="*")
{
    echo $number1 * $number2;
}
else if($up=="/")
{
    echo $number1 / $number2;
}

?>