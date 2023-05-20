<?php

// This is already implemented function parameters type hinting


$exam_score = [
    array(
        'id' => 1220,
        'name' => 'Lina',
        'last_name' => 'Karolina',
        'gender' => 'female',
        'exam_score' => 78,
        'quiz_score' => 80
    ),array(
        'id' => 1221,
        'name' => 'Kidi',
        'last_name' => 'Alan',
        'gender' => 'male',
        'exam_score' => 77,
        'quiz_score' => 79
    ), array(
        'id' => 1222,
        'name' => 'Amar',
        'last_name' => 'Tanjung',
        'gender' => 'male',
        'exam_score' => 92,
        'quiz_score' => 85
    ),array(
        'id' => 1223,
        'name' => 'Pandu',
        'last_name' => 'Ginanjar',
        'gender' => 'male',
        'exam_score' => 84,
        'quiz_score' => 84
    ),array(
        'id' => 1224,
        'name' => 'Lili',
        'last_name' => 'Pertiwi',
        'gender' => 'female',
        'exam_score' => 63,
        'quiz_score' => 81
    ),array(
        'id' => 1225,
        'name' => 'Wirni',
        'last_name' => 'Asih',
        'gender' => 'female',
        'exam_score' => 80,
        'quiz_score' => 91
    ),
];

function concate_full_name(string $first_name, string $last_name) : string {
    return $first_name . ' ' . $last_name;
}

function get_final_score_status(int $exam_score = 0, int $quiz_score = 0) : string{
    if($exam_score > 80 and $quiz_score > 82){
        return "Passed!";
    }else if($exam_score > 80 and $quiz_score <= 82){
        return "Not passed, take new quiz!";
    }else if($exam_score <= 80 and $quiz_score > 82){
        return "Not passed, take the remedial exam !";
    }else{
        return "Not passed, try next semester!";
    }
}

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
            $fullName = concate_full_name($score['name'], $score['last_name']);
            $status = get_final_score_status($score['exam_score'], $score['quiz_score']);
            ?>
            <li> <?= "<b>{$fullName}</b> Student with id {$score['id']}. Your final score status is <b>{$status}</b>  " ?></li>
        <?php endforeach; ?>
    </ol>
    <?php
    $averageExam = $totalScore / count($exam_score);
    $averageQuiz = $totalQuiz / count($exam_score);

    ?>
    <p>Average of exam score is <b><?= $averageExam; ?></b> and average of quiz score is <b><?= $averageQuiz; ?></b> </p>
</body>

</html>