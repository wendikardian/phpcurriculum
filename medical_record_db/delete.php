<?php
require_once 'helper/get_input.php';
require 'connection.php';
require_once 'helper/database.php';

$id = input_checker('id', 0);

if (isset($_GET['id'])) {

    $preparedQuery = $connection->prepare($deleteQuery);
    $query = $preparedQuery->execute([$id]);
    header('Location: index.php');
}
