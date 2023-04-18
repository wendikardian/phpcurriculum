<?php
    $name = "Alex Ferguso";
    $born = "31 December 1941";
    $birthplace = "Glasgow, UK";
    $nationality = "British";
    $occupation = "Football Manager";
    $currentclub = "Manchester United Football Club";
    $firstclub = "East Stirlingshire";
    $firstclubyear = "1964";
    $firstclubposition = "Player";
    $secondclub = "St. Mirren";
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $name; ?></title>
</head>
<body>
    <h1>Biodata of <?= $name; ?></h1>

    <p>
        <?=" he is $name born in  $birthplace, $nationality <br> his accupation is $occupation <br> his first clu is $firstclub  " ; ?>
    </p>
</body>
</html>