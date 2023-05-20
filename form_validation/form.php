<?php
require_once 'helper/Validation.php';
require_once 'helper/RequiredRule.php';


$name = $_POST['name'] ?? 'name';
$attributes = ['name' => $name];


$rules = [
    'name' => [
        new RequiredRule(),
    ],
];

// var_dump($rules['name'][0]);
// echo "<br>";
// var_dump($attributes);

$validation = new Validation();
$validation->makeRule(
    $attributes,
    $rules
);

// print_r($validation->getErrors());
// echo $validation->isFails();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>

<body>
    <form action="" method="POST">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" required>
        <div style="color:red;"> <?= $validation->getErrors()['name'][0] ?? '' ?> </div>
        <br>
        <input type="submit" name="submit">
    </form>
</body>

</html>