<?php
    $jlnAnggrek = 0.8 * 1000;
    $jlnKamboja = 500;
    $jlnLotus = 2500 / 100;
    $feePerMeter = 650;
    $cost = 15000;

    $totalLength = $jlnAnggrek + $jlnKamboja + $jlnLotus;
    $feeForEmployee = $totalLength * $feePerMeter;
    $costTotal = $totalLength * $cost;
    $totalCostIncludeFee = $feeForEmployee + $costTotal;

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
    <h1>Calculating Project cost</h1>
    <p>To Carry out road repairs with a total length of <?= $totalLength; ?> meters, Perumahan Graha sentosa must prepare a total cost of Rp. <?= $totalCostIncludeFee ?>.</p>
</body>
</html>