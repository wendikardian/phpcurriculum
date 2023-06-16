<?php
require_once 'helper/get_input.php';
require 'connection.php';
require_once 'helper/database.php';


if (isset($_GET['id'])) {

    $preparedQuery = $connection->prepare($deleteQuery);
    $query = $preparedQuery->execute([$_GET['id']]);
    header('Location: index.php');
}
