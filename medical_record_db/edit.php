<?php

require_once 'helper/get_input.php';
require_once 'helper/database.php';
require_once 'connection.php';
require_once 'helper/Validation.php';
require_once 'helper/RequiredRule.php';
require_once 'helper/NumberRule.php';
require_once 'helper/RangeAge.php';
require_once 'helper/HeightRule.php';

// get id from url params
$id = $_GET['id'];
// get data from database

$query = $connection->prepare($selectSpecified);
$query->execute([$id]);
$user = $query->fetch(PDO::FETCH_ASSOC);


$updated_name = input_checker('name', '');
$updated_age = input_checker('age', 0);
$updated_gender = input_checker('gender', 'm');
$updated_height = input_checker('height', 1);
$updated_weight = input_checker('weight', 1);
$updated_waistSize = input_checker('waistSize', 1);


$validation = new Validation();


if (isset($_POST['save'])) {

    $attributes = [
        'name' => $updated_name,
        'age' => $updated_age,
        'height' => $updated_height
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


        $data = [
            $updated_name,
            $updated_age,
            $updated_gender,
            $updated_height,
            $updated_weight,
            $updated_waistSize,
            $id
        ];
        // print_r($data);

        $preparedQuery = $connection->prepare($updateQuery);

        try {
            $preparedQuery->execute($data);
            echo "<script>alert('Data updated successfully');</script>";
        } catch (PDOException $e) {
            echo "<script>alert('Error updating data: " . $e->getMessage() . "');</script>";
        }


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
    <h1>Edit <?= $user['name'] ?>'s Data</h1>

    <form action="" method="POST">
        <input type="hidden" name="id" value="<?= $user['id'] ?>">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="<?= $user['name'] ?>"><br>

        <label for="age">Age:</label>
        <input type="text" id="age" name="age" required value="<?= $user['age'] ?>"><br>

        <label for="gender">Select Gender:</label>
        <select id="gender" name="gender" required>
            <option value="m" <?php echo $user['gender'] == 'm' ? 'selected' : ''; ?>>Male</option>
            <option value="f" <?php echo $user['gender'] == 'f' ? 'selected' : ''; ?>>Female</option>
        </select><br>

        <label for="height">Height (cm):</label>
        <input type="number" id="height" name="height" step="0.01" required value="<?= $user['height'] ?>"><br>

        <label for="weight">Weight (kg):</label>
        <input type="number" id="weight" name="weight" step="0.01" required value="<?= $user['weight'] ?>"><br>

        <label for="waistSize">Waist size (cm):</label>
        <input type="number" id="waistSize" name="waistSize" step="0.01" value="<?= $user['waist_size'] ?>" required><br>

        <input type="submit" value="Save" name="save">
    </form>


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
</body>

</html>