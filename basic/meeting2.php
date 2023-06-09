<?php
    $firstName = "Wendi";
    $lastName = 'Kardian';
    $firstName = "John";



    echo 'Hello world';
    echo "<br>";
    echo "Hell'o world";
    echo "<br>";
    echo "Hello {$firstName} {$lastName}";

    $jobs = "Programmer";
    $age = 18;
    $height = 170.5;
    // Concat character

    echo "<br>";
    echo "<br>";

    echo "Hello, my name is {$firstName} {$lastName}, I am {$age} years old. I am a {$jobs}";
    echo "<br>";
    echo "I am "  . $height . " cm tall" ;
    echo "<br>";

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
    <h1>Welcome to my page, my name is <?= "$firstName $lastName   "?>  </h1>
    <p> I am a <?= $jobs; ?> </p>
</body>
</html>