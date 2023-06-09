<?php

$firstOperand = 10;
$secondOperand = 6;

$additionalResult = $firstOperand + $secondOperand;
echo "Result of addition of {$firstOperand} + {$secondOperand} is {$additionalResult}";


$multiResult = $firstOperand * $secondOperand;
echo "<br>";
echo "Result of multiplication  of {$firstOperand} * {$secondOperand} is {$multiResult}";

echo "<br>";
echo "<br>";
echo "<br>";

$modulusResult = $firstOperand % $secondOperand;
echo "Result of modulus of {$firstOperand} % {$secondOperand} is {$modulusResult}";
$exponentialResult = $firstOperand ** $secondOperand;
echo "<br>";
echo "Result of exponential of {$firstOperand} ** {$secondOperand} is {$exponentialResult}";
echo "<br>";
echo "<br>";


$totalStudent = 23;
$newStudent = 2;

$totalStudent += $newStudent;
echo "Total student is {$totalStudent}"
?>