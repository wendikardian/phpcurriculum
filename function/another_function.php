<?php

// Default parameters

function multiply_two_number($a, $b=1){
    $result = $a * $b;
    return $result;
}

$result1 = multiply_two_number(2, 5);
$result2 = multiply_two_number(49);

echo 'result1 = ' . $result1;
echo "<br>";
echo 'result2 = ' . $result2;

?>