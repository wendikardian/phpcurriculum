<?php
    $studentScores = [80,91,79,86,75,88];

    foreach($studentScores as $score){
        echo "Student score is {$score} <br>";
    }

    echo "<br>";
    echo "<br>";

    echo "With indexing";
    echo "<br>";
    foreach($studentScores as $idx => $score){
        $idx+=1;
        echo "Student {$idx} score is {$score} <br>";
        }

    echo "<br>";
    echo "<br>";

    $davidIdentity = [
        "firstName" => "David",
        "lastName" => "Antonius",
        "address" => "Mawar Residence, No.3 ",
        "bodyHeight" => 175,
        "bodyWidth" => 75
    ];


    echo "David Identity : <br>";
    foreach($davidIdentity as $key => $value){
        echo "{$key} : {$value} <br>";
    }
