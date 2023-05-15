<?php

class Person
{
    public $name = '';
    public $age = 0;
    public $gender = 'm';
    public $height = 0.0;
    public $weight = 0.0;
    public $waistSize = 0.0;
    public function bio($name, $age, $gender)
    {
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
    }

    public function bodyFact($height, $weight, $waistSize)
    {
        $this->height = $height;
        $this->weight = $weight;
        $this->waistSize = $waistSize;
    }
}

class BodyMassIndex {
    public $score = 0.0;
    public $category = '';

    public function calculate($height, $weight) {
        $this->score = $weight / (($height/100) * ($height/100));
    }

    public function determineCategory() {
        if ($this->score < 18.5) {
            return 'Underweight';
        } elseif ($this->score >= 18.5 && $this->score < 25) {
            return 'Normal weight';
        } elseif ($this->score >= 25 && $this->score < 30) {
            return 'Overweight';
        } else {
            return 'Obese';
        }
    }
}




if (isset($_GET['name']) && isset($_GET['age']) && isset($_GET['gender']) && isset($_GET['height']) && isset($_GET['weight']) && isset($_GET['waistSize'])) {
    $name = $_GET['name'];
    $age = $_GET['age'];
    $gender = $_GET['gender'];
    $height = $_GET['height'];
    $weight = $_GET['weight'];
    $waistSize = $_GET['waistSize'];
    $person = new Person();
    $person->name = $name;
    $person->age = $age;
    $person->gender = $gender;
    $person->height = $height;
    $person->weight = $weight;
    $person->waistSize = $waistSize;
} else {
    $person = new Person();
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
            <option value="m">Laki-laki</option>
            <option value="f">Perempuan</option>
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
    }
    ?>

</body>

</html>