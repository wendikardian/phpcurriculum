<?php
require_once 'class/connection.php';

$config = [
    'host' => 'localhost',
    'database' => 'medical_records',
    'user' => 'root',
    'password' => ''
];

$mysqlConnection = new MySQLConnection(
    $config['host'],
    $config['database'],
    $config['user'],
    $config['password']
);


$connection = $mysqlConnection->getConnection();



?>