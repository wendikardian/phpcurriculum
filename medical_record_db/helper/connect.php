<?php
    // print_r(PDO::getAvailableDrivers());

    $host = "127.0.0.1";
    $dbname = "medical_records";
    $user = "root";
    $pass = "";


    try{
        $dbh = new PDO(
            "mysql:host=$host;dbname=$dbname",
            $user,
            $pass
        );
        // echo "Connected to database !";
    }catch(PDOException $e){
        print "Error! : ". $e->getMessage() . "<br>";
    }
?>