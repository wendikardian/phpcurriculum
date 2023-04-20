<?php
    $angrekLength = $_GET["anggrek"];
    $kambojaLength = $_GET["kamboja"];
    $lotusLength = $_GET["lotus"];

    $jlnAnggrek = $angrekLength * 1000;
    $jlnKamboja = $kambojaLength;
    $jlnLotus = $lotusLength / 100;
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
    <title>Cost Calculating</title>
</head>
<body>
    <h1>Dynamics Calculating Project cost</h1>
    <form action="">
        <label for="anggrek">Anggrek Street (Kilometer)</label>
        <input type="number" step="0.01" name="anggrek">
        <br>
        <label for="kamboja">Kamboja Street (meter)</label>
        <input type="number" name="kamboja">
        <br>
        <label for="lotus">Lotus Street (centimeter)</label>
        <input type="number" name="lotus">
        <br>
    <input type="submit">
    </form>

    <p>To Carry out road repairs with a total length of <?= $totalLength; ?> meters, Perumahan Graha sentosa must prepare a total cost of Rp. <?= $totalCostIncludeFee ?>.</p>
</body>
</html>