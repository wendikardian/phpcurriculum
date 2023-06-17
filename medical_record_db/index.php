<?php
require_once('helper/connect.php');
require_once('class/connection.php');
require_once('class/BodyMassIndex.php');
require_once('class/RelativeFatMass.php');
require_once('class/Person.php');
require_once('connection.php');
require_once('helper/database.php');
require_once('helper/Pagination.php');

function get_input($input_name, $default_value)
{
    $input_value = $_GET[$input_name] ?? $default_value;
    return $input_value;
}

$connection = $mysqlConnection->getConnection();

$query = $connection->query($selectAllPersons);
$users = $query->fetchAll();

// print_r($users);

$totalRecord = count($users);
$recordsPerPage = 2;
$currentPage = (int) get_input('page', 1);

$pagination = new Pagination($totalRecord, $recordsPerPage, $currentPage);
$offset = $pagination->getOffset();

$select = "SELECT * FROM persons LIMIT {$offset}, {$recordsPerPage};";
$query = $connection->query($select);
$users = $query->fetchAll();

$id = 1;



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Medical Record database ! </title>
</head>

<body>
    <h1>Welcome to medical record database</h1>
    <a href="create.php">Insert data</a>
    <!-- render array users in table -->
    <table>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Height (cm)</th>
            <th>Weight (kg)</th>
            <th>Waist size (cm)</th>
            <th>BMI Score</th>
            <th>BMI Category</th>
            <th>RFM Score</th>
            <th>RFM Category</th>
            <th>Action</th>
        </tr>
        <?php foreach ($users as $user) :

            ?>
            <tr>
                <td> <?= $id ?> </td>
                <td><?= $user['name'] ?></td>
                <td><?= $user['age'] ?></td>
                <td><?= $user['gender'] ?></td>
                <td><?= $user['height'] ?></td>
                <td><?= $user['weight'] ?></td>
                <td><?= $user['waist_size'] ?></td>
                <?php

                $person = new Person($user['name'], $user['age'], $user['gender']);
                $bmi = new BodyMassIndex();
                $rfm = new RelativeFatMass();
                $bmi->calculate($user['height'], $user['weight']);
                $rfm->calculate($user['height'], $user['waist_size'], $user['gender']);

                ?>
                <td><?= $bmi->getScore(); ?></td>
                <td><?= $bmi->determineCategory(); ?></td>
                <td><?= $rfm->getScore(); ?></td>
                <td><?= $rfm->determineCategory($user['gender']); ?></td>
                <td>
                    <a href="edit.php?id=<?= $user['id'] ?>">Edit</a>
                    <a href="confirm.php?id=<?= $user['id'] ?>">Delete</a>
                </td>
            </tr>
            <?php $id++; ?>
        <?php endforeach; ?>

    </table>
    <?php
    foreach ($pagination->getPages() as $page) :
    ?>
        <a href="?page=<?= $page ?>"><?= $page ?></a>
    <?php endforeach; ?>
</body>

</html>