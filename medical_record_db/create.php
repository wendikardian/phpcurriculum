<?php

require_once 'connection.php';
require_once 'helper/get_input.php';
require_once 'helper/database.php';
require_once 'helper/Validation.php';
require_once 'helper/RequiredRule.php';
require_once 'helper/NumberRule.php';
require_once 'helper/RangeAge.php';
require_once 'helper/HeightRule.php';

// create connection to db

$connection = $mysqlConnection->getConnection();

// get input from user
$name = input_checker('name', '');
$age = input_checker('age', 0);
$gender = input_checker('gender', 'm');
$height = input_checker('height', 1);
$weight = input_checker('weight', 1);
$waistSize = input_checker('waistSize', 1);



$validation = new Validation();

if (isset($_POST['save'])) {
    $attributes = [
        'name' => $name,
        'age' => $age,
        'height' => $height
    ];

    $rules = [
        'name' => [
            new RequiredRule()
        ], 'age' => [
            new RequiredRule(),
            new NumberRule(),
            new RangeNumber()
        ], 'height' => [
            new RequiredRule(),
            new HeightRule()
        ]
    ];


    $validation->makeRule(
        $attributes,
        $rules
    );

    if (count($validation->getErrors()) == 0) {

        // check if get exist
        $data = [$name, $age, $gender, $height, $weight, $waistSize];
        $insertPersons = $connection->prepare($insertPersonsQuery);
        $insertPersons->execute($data);

        // redirect to index.php
        header('Location: index.php');
    }
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

    <form action="" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"><br>

        <label for="age">Age:</label>
        <input type="text" id="age" name="age"><br>

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

        <input type="submit" value="Count" name="save">
        <div style="color:red;"> <?= $validation->getErrors()['name'][0] ?? '' ?> </div>
        <?php
        foreach ($validation->getErrors()['age'] ?? [] as $error) {
            echo "<div style='color:red;'> $error </div>";
        }
        ?>
        <?php
        foreach ($validation->getErrors()['height'] ?? [] as $error) {
            echo "<div style='color:red;'> $error </div>";
        }
        ?>

        <!-- <div style="color:red;"> <?= $validation->getErrors()['age'][0] ?? '' ?> </div> -->
    </form>
    <!-- </body> -->

</html>