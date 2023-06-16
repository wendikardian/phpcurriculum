<?php

class MySQLConnection{
    private ?PDO $connection = null;


    public function __construct(string $host, string $database, string $user, string $password = ''){
        try{
            $dsn = "mysql:host={$host};dbname={$database}";
            $this->connection = new PDO($dsn, $user, $password);
        }catch(PDOException $e) {
            print "Error! : ". $e->getMessage() . "<br>";
        }
    }

    public function getConnection() : ?PDO{
        return $this->connection;
    }
}

?>