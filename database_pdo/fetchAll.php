<?php

require_once "class/connection.php";

$config = [
    'host' => 'localhost',
    'database' => 'rossmary_corp',
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
// print $connection;

$query = $connection->query("SELECT * FROM products;");
$products = $query->fetchAll();

print_r($products);


// $preparedQuery = $connection->prepare("INSERT INTO products (name, unit, stock, price) VALUES (?, ?, ?, ?);");
// $preparedQuery->execute(['Wendi', 'Kg', 7, '2000']);

// $query = $connection->query("SELECT * FROM products;");
// $products = $query->fetchAll();

// print_r($products);


?>