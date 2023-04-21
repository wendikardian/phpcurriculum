<?php

function sayhello(){
    echo "Hello World, i'm that named sayhello";
}
sayhello();

// Function with parameter

echo "<br>";
echo "<br>";

function sayHI($name){
    echo "Hello {$name}, i'm that named sayHI";
}

sayHI("David");
echo "<br>";
echo "<br>";


function driving_license($name, $age, $gender){
    if ($age >= 17){
        $status = "allowed";
    }else{
        $status = "not old anough";
    }

    if($gender == "m"){
        $honorific = "Mr.";
    }else{
        $honorific = "Mrs.";
    }

    echo "Hello {$honorific} {$name}, You're {$status} to have driving license ";
}


driving_license("David", 17, "m");

// Function with return value
function multiply_two_number($a, $b){
    $result = $a * $b;
    return $result;
}

echo "<br>";
echo "<br>";

$result1 = multiply_two_number(2, 3);
$result2 = multiply_two_number(4, 5);
$result3 = multiply_two_number(6, 7);

$total = $result1 + $result2 + $result3;
echo "Sum of multiplications result is " . $total;

?>