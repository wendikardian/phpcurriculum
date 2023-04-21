<?php
    // $studentGrades = [80,91, 79, 86, 75,88];

    // for($i = 0; $i < count($studentGrades); $i++){
    //     $studentIndex = $i + 1;
    //     echo "Student $studentIndex score is $studentGrades[$i] <br> ";
    // }


    echo "<br>";
    echo "<br>";

    $studentScores = [
        [80, 91, 79],
        [86, 75, 88]
    ];

    for ($i = 0; $i < count($studentScores); $i++) {
        for ($j = 0; $j < count($studentScores[$i]); $j++) {
            echo "Student score row - $i col $j  is ". $studentScores[$i][$j] . "<br>";
        }

    }
