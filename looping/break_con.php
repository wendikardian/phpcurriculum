<?php
    $numbers = ['three', 'four', 'two', 'six', 'seven'];

    foreach($numbers as $number) {
        if($number == 'six'){
            break;
        }
        echo "The number is {$number} <br>";

    }

    echo "<br>";
    echo 'using continue <br>';
    foreach($numbers as $number) {
        if($number == 'six'){
            echo 'Continue ! <br>';
            continue;
        }
        echo "The number is {$number} <br>";

    }

?>