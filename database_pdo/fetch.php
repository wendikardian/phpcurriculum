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


// $selectQuery = "SELECT * FROM products WHERE id=2";
// $query = $connection->query($selectQuery);
// $product = $query->fetch();

// print_r($product);

$userInput = 2;
$selectQuery = "SELECT * FROM products WHERE id = ?";
$preparedQuery = $connection->prepare($selectQuery);
$preparedQuery->execute([$userInput]);
$result = $preparedQuery->fetch(PDO::FETCH_ASSOC);

print_r($result);

// For insert data


// $data = ['Clove', 'Kg', 100, '4.5'];

// $preparedQuery = $connection->prepare(
//     "INSERT INTO products (name, unit, stock, price ) VALUES (?, ?, ?, ?);"
// );



// For update data

// $preparedQuery->execute($data);


// $dataInput = [200, 111, 7];
// $updateQuery = 'UPDATE products SET stock = ?, price = ? WHERE id = ?;';
// $preparedQuery = $connection->prepare($updateQuery);
// $query = $preparedQuery->execute($dataInput);

// $preparedQuery = $connection->prepare("INSERT INTO products (name, unit, stock, price) VALUES (?, ?, ?, ?);");
// $preparedQuery->execute(['Wendi', 'Kg', 7, '2000']);

// $query = $connection->query("SELECT * FROM products;");
// $products = $query->fetchAll();

// print_r($products);



// For delete data


// $dataToDelete = 7;
// $deleteQuery = "DELETE FROM products WHERE id = ?;";
// $preparedQuery = $connection->prepare($deleteQuery);
// $query = $preparedQuery->execute([$dataToDelete]);

?>