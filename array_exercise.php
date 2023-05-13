<?php
    $dataScore = [100, 200, 300];
    $dataName = array("John", "Doe", "Smith");
    // print_r($dataScore);
    
    $biodata =
    [
        [
            "name" => "John",
            "dateOfBirth" => "1990-01-01",
            "address" => "Jakarta",
            "isMarried" => false,
            "hobbies" => ["Coding", "Swimming", "Reading"]
        ],
        [
            "name" => "Doe",
            "dateOfBirth" => "1992-01-01",
            "address" => "Jakarta",
            "isMarried" => false
        ], [
            "name" => "Smith",
            "dateOfBirth" => "1989-01-01",
            "address" => "Jakarta",
            "isMarried" => true
        ], [
            "name" => "Jane",
            "dateOfBirth" => "1993-01-01",
            "address" => "Jakarta",
            "isMarried" => true
        ]
        ];


    echo $biodata[0]["name"];
    echo "<br>";
    echo $biodata[3]["address"];
    echo "<br>";
    echo $biodata[2]["isMarried"];
    echo "<br>";
    echo $biodata[0]["hobbies"][1];



    // echo count($dataName);


    // echo rand(1, 5);
