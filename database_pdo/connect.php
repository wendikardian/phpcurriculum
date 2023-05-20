<?php
    print_r(PDO::getAvailableDrivers());

    $host = "127.0.0.1";
    $dbname = "brighter_schools";
    $user = "root";
    $pass = "";


    // $dbh = new PDO(
    //     "mysql:host=$host;dbname=$dbname",
    //     $user,
    //     $pass
    // )


    try{
        $dbh = new PDO(
            "mysql:host=$host;dbname=$dbname",
            $user,
            $pass
        );
        echo "Connected to database !";
    }catch(PDOException $e){
        print "Error! : ". $e->getMessage() . "<br>";
    }
?>