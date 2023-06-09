<?php
require_once 'helper/get_input.php';
require 'connection.php';

$id = input_checker('id', 0);

if (isset($_GET['id'])) {
    $deleteQuery = "DELETE FROM persons WHERE id = $id";
    $query = $connection->query($deleteQuery);
    header('Location: index.php');
}

?>