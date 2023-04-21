<?php

$exam_score = [78, 77, 92, 84, 63, 80];
$total = 0;

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
    <h1>Students Exam Score</h1>
    <p>List of the students score !</p>
    <ol>
        <?php for ($i = 0; $i < count($exam_score); $i++) : ?>
            <?php
            $idx = $i + 1;
            $total += $exam_score[$i];
            ?>
            <li> <?= "Student{$idx}'s score is {$exam_score[$i]}" ?></li>
        <?php endfor; ?>
    </ol>
    <?php
    $average = $total / count($exam_score);

    ?>
    <p>Average of exam score is <b><?= $average; ?></b></p>
</body>

</html>