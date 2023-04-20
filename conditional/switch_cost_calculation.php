<?php
if (isset($_GET["anggrek"]) && isset($_GET["kamboja"]) && isset($_GET["lotus"])) {
    $angrekLength = $_GET["anggrek"];
    $kambojaLength = $_GET["kamboja"];
    $lotusLength = $_GET["lotus"];
    if (isset($_GET["is_checked"])) {
        $isCashReady = true;
    } else {
        $isCashReady = false;
    }
    // var_dump($isCashReady);
    $distance_unit = $_GET["distance_unit"];
    switch($distance_unit){
        case "CM":
            $angrekLength = $angrekLength / 100000;
            $kambojaLength = $kambojaLength / 100;
            $lotusLength = $lotusLength / 100000;
            break;
        case "M":
            $angrekLength = $angrekLength / 1000;
            $kambojaLength = $kambojaLength;
            $lotusLength = $lotusLength / 100;
            break;
        case "KM":
            $angrekLength = $angrekLength;
            $kambojaLength = $kambojaLength * 1000;
            $lotusLength = $lotusLength * 100000;
            break;
    }
    // var_dump($distance_unit);
} else {
    $angrekLength = 0;
    $kambojaLength = 0;
    $lotusLength = 0;
    $distance_unit = "cm";
    $isCashReady = true;
}

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
        <label for="distance-unit">Distance Unit:</label>
        <select id="distance-unit" name="distance_unit">
            <option value="CM" <?php if(isset($_GET['distance_unit']) && $_GET['distance_unit'] == 'CM') echo 'selected'; ?>>Centimeters (CM)</option>
            <option value="M" <?php if(isset($_GET['distance_unit']) && $_GET['distance_unit'] == 'M') echo 'selected'; ?>>Meters (M)</option>
            <option value="KM" <?php if(isset($_GET['distance_unit']) && $_GET['distance_unit'] == 'KM') echo 'selected'; ?>>Kilometers (KM)</option>
        </select>
        <br>
        <label for="anggrek">Anggrek Street (Kilometer)</label>
        <input type="number" step="0.01" name="anggrek" value="<?php echo isset($_GET['anggrek']) ? htmlspecialchars($_GET['anggrek']) : '' ?>" required>
        <br>
        <label for="kamboja">Kamboja Street (meter)</label>
        <input type="number" name="kamboja"  value="<?php echo isset($_GET['kamboja']) ? htmlspecialchars($_GET['kamboja']) : '' ?>" step="0.01" required>
        <br>
        <label for="lotus">Lotus Street (centimeter)</label>
        <input type="number" value="<?php echo isset($_GET['lotus']) ? htmlspecialchars($_GET['lotus']) : '' ?>"  name="lotus"  step="0.0001" required>
        <br>
        <label for="checkbox">is cash ready ? </label>
        <input type="checkbox" name="is_checked" value="1">
        <br>
        <input type="submit">
    </form>

    <p>To Carry out road repairs with a total length of <?= $totalLength; ?> meters, Perumahan Graha sentosa must prepare a total cost of Rp. <?= $totalCostIncludeFee ?>.</p>

    <?php if ($totalCostIncludeFee > 0) :  ?>
        <?php
        if ($isCashReady) : ?>
            <p style='color: green;'>The project will be implemented soon !</p>
        <?php else : ?>
            <p style='color: red;'>The project implementation will be postponed until funds are available</p>
        <?php endif; ?>
    <?php endif; ?>
</body>

</html>