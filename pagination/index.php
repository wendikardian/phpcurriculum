<?php

require_once "class/connection.php";
require_once "Pagination.php";

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

function get_input($input_name, $default_value)
{
    $input_value = $_GET[$input_name] ?? $default_value;
    return $input_value;
}

$connection = $mysqlConnection->getConnection();

$query = $connection->query("SELECT * FROM products;");
$products = $query->fetchAll();

// print_r($products);
$totalRecord = count($products);
$recordsPerPage = 2;
$currentPage = (int) get_input('page', 1);

$pagination = new Pagination($totalRecord, $recordsPerPage, $currentPage);
$offset = $pagination->getOffset();

$select = "SELECT * FROM products LIMIT {$offset}, {$recordsPerPage};";
$query = $connection->query($select);
$products = $query->fetchAll();
// print_r($products);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;

        }

        tr {
            border: 1px solid black;
        }

        th,
        td {
            border: 1px solid black;
            padding: 10px;
        }
    </style>
</head>

<body>
    <h1>Product Data</h1>
    <table>
        <tr>
            <th>Name</th>
            <th>Unit</th>
            <th>Stock</th>
            <th>Price</th>
        </tr>
        <?php
        foreach ($products as $product) :
        ?>
            <tr>
                <td><?= $product['NAME'] ?></td>
                <td><?= $product['unit'] ?></td>
                <td><?= $product['stock'] ?></td>
                <td><?= $product['price'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <?php
    foreach ($pagination->getPages() as $page) :
    ?>
        <a href="?page=<?= $page ?>"><?= $page ?></a>
    <?php endforeach; ?>
</body>

</html>