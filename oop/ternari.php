<?php
    $condition = true;

    echo $condition ? "true" : "false";


    echo "<br>";
    $time = 18;
    $description = ($time >= 6 && $time <=18) ? "daylight" : "nights";
    echo $description;

    echo "<br>";
    // For functions that return a ternary operator
    function return_by_ternary($condition = true): string{
        return $condition ? " this is true" : "this is false";
    }

    echo return_by_ternary();
?>