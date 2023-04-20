<?php
    $isSevenTeen = true;
    $fontColor = "green";


    if($isSevenTeen){
        $status = "Eligible to take the driving license test.";
    }else{
        $status = "Not yet eligible";
        $fontColor = "red";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Driver License if-else</title>
</head>
<body>
    <h1>The License drive test status</h1>
    <p style="color:<?= $fontColor; ?>">
        <?= $status; ?>
    </p>
</body>
</html>