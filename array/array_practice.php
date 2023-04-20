<?php

    $queue = ["Donnie", "Anne", "Gilbert", "Gilran"];
    $totalQueue = count($queue);
    echo "Total queue = {$totalQueue} <br>";
    echo "pattient in examination = {$queue[0]} <br>";


    array_shift($queue);
    $totalQueue = count($queue);
    echo "Total queue = {$totalQueue} <br>";
    echo "pattient in examination = {$queue[0]} <br>";
    echo "<br>";


    array_push($queue, "Keil", "Olivia");
    array_shift($queue);
    $totalQueue = count($queue);
    echo "Total queue = {$totalQueue} <br>";
    echo "pattient in examination = {$queue[0]} <br>";
    echo "<br>";

?>