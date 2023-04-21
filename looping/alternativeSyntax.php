<?php
    $davidIdentitiy = [
        "firstName" => "David",
        "lastName" => "Antonius",
        "address" => "Mawar Residence, No.3 ",
        "bodyHeight" => 175,
        "bodyWidth" => 75
    ];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alternate syntax for foreach</title>
</head>
<body>
    <h3>Foreach loop with alternative syntax</h3>
    <h4>David Identity</h4>

    <?php foreach($davidIdentitiy as $key => $value): ?>

        <p><?= $key ?> : <?= $value ?></p>
    <?php endforeach; ?>
</body>
</html>