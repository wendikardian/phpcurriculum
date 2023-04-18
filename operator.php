<?php


$operand1=20;
$operand2=4;

$additionalResult = $operand1 + $operand2;
$subtractionResult = $operand1 - $operand2;

echo '$additional result  = '.$additionalResult;
echo "<br>";
echo '$subtraction result = '.$subtractionResult;


$secondInMinute = 60;
$minuteInHour = 60;
$hoursInADay = 24;
$secondInADay = $secondInMinute * $minuteInHour * $hoursInADay;
$divisioOfThree = $secondInADay / 3;

echo "<br>";
echo "<br>";
echo "<br>";

echo "In a day, we have {$secondInADay} seconds of life";
echo "<br>";
echo "And we use {$divisioOfThree} seconds of life for sleeping";

echo "<br>";
echo "<br>";
echo "<br>";

$restOfDiv = 365 % 12;
echo "We have {$restOfDiv} as rest after divide 365 by 12";
?>