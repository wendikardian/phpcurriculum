<?php

$exam_score = [
    array(
        'id' => 1220,
        'name' => 'Lina',
        'exam_score' => 78,
        'quiz_score' => 80
    ),array(
        'id' => 1221,
        'name' => 'Kidi',
        'exam_score' => 77,
        'quiz_score' => 79
    ), array(
        'id' => 1222,
        'name' => 'Amar',
        'exam_score' => 92,
        'quiz_score' => 85
    ),array(
        'id' => 1223,
        'name' => 'Pandu',
        'exam_score' => 84,
        'quiz_score' => 84
    ),array(
        'id' => 1224,
        'name' => 'Lili',
        'exam_score' => 63,
        'quiz_score' => 81
    ),array(
        'id' => 1225,
        'name' => 'Wirni',
        'exam_score' => 80,
        'quiz_score' => 91
    ),
];

$totalScore = 0;
$totalQuiz = 0;
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
    <h1>Students Final Scores</h1>
    <p>List of the students score !</p>
    <ol>
        <?php foreach($exam_score as $score): ?>
            <?php
            $totalScore += $score['exam_score'];
            $totalQuiz += $score['quiz_score'];
            ?>
            <li> <?= "Student with id {$score['id']} named {$score['name']} got exam score =  {$score['exam_score']} and quiz score =  {$score['quiz_score']}" ?></li>
        <?php endforeach; ?>
    </ol>
    <?php
    $averageExam = $totalScore / count($exam_score);
    $averageQuiz = $totalQuiz / count($exam_score);

    ?>
    <p>Average of exam score is <b><?= $averageExam; ?></b> and average of quiz score is <b><?= $averageQuiz; ?></b> </p>
</body>

</html>