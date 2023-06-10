<?php

require_once 'connection.php';
require_once 'helper/get_input.php';
require_once 'helper/database.php';

// create connection to db

$connection = $mysqlConnection->getConnection();

// get input from user
$name = input_checker('name', '');
$age = input_checker('age', 0);
$gender = input_checker('gender', 'm');
$height = input_checker('height', 1);
$weight = input_checker('weight', 1);
$waistSize = input_checker('waistSize', 1);


if ($name !== '') {
    // check if get exist
    $data = [$name, $age, $gender, $height, $weight, $waistSize];
    $insertPersons = $connection->prepare($insertPersonsQuery);
    $insertPersons->execute($data);

    // redirect to index.php
    header('Location: index.php');
}




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Data Input</h1>

    <form action="" method="get">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br>

        <label for="age">Age:</label>
        <input type="number" id="age" name="age" required><br>

        <label for="gender">Select Gender:</label>
        <select id="gender" name="gender" required>
            <option value="m">Male</option>
            <option value="f">Female</option>
        </select><br>

        <label for="height">Height (cm):</label>
        <input type="number" id="height" name="height" step="0.01" required><br>

        <label for="weight">Weight (kg):</label>
        <input type="number" id="weight" name="weight" step="0.01" required><br>

        <label for="waistSize">Waist size (cm):</label>
        <input type="number" id="waistSize" name="waistSize" step="0.01" required><br>

        <input type="submit" value="Count">
    </form>
    <!-- </body> -->

</html>