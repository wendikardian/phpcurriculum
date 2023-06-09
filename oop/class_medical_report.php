<?php

require_once('./class/Person.php');
require_once('./class/BodyMassIndex.php');
require_once('./class/RelativeFatMass.php');
require_once('./helper/get_input.php');

$person = new Person('Some one', 20, 'm');
$bmi = new BodyMassIndex();
$rfm = new RelativeFatMass();





$name = input_checker('name', '');
$age = input_checker('age', 0);
$gender = input_checker('gender', 'm');
$height = input_checker('height', 1);
$weight = input_checker('weight', 1);
$waistSize = input_checker('waistSize', 1);

$person->name = $name;
$person->age = $age;
$person->gender = $gender;
$person->height = $height;
$person->weight = $weight;
$person->waistSize = $waistSize;
$bmi->calculate($height, $weight);
$rfm->calculate($height, $waistSize, $gender);



?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI Calculator</title>
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
    <br>
    <br>
    <br>
    <?php
    if (isset($_GET['name']) && isset($_GET['age']) && isset($_GET['gender']) && isset($_GET['height']) && isset($_GET['weight']) && isset($_GET['waistSize'])) {
        echo 'User detail : ';
        echo '<br>';
        echo "Nama: " . $person->name . "<br>";
        echo "Usia: " . $person->age . "<br>";
        echo "Gender: " . $person->gender . "<br>";
        echo "Height: " . $person->height . "<br>";
        echo "Width: " . $person->weight . "<br>";
        echo "Waist size: " . $person->waistSize . "<br>";
        echo '<br>';
        echo 'BMI Score: ' . $bmi->getScore() . ' belongs to the category <b> ' . $bmi->determineCategory() . '</b><br>';
        echo 'RFM Score: ' . $rfm->getScore() . ' belongs to the category <b>' . $rfm->determineCategory($person->gender) . '</b><br>';
    }
    ?>

</body>

</html>