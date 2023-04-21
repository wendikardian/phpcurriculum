<?php

    function sum_values(array $values){
        $result = 0;
        foreach($values as $value){
            $result += $value;
        }
        return $result;
    }

    $values = [1,2,3,4,5];
    $sum = sum_values($values);
    echo "sum of values: " . $sum;

?>