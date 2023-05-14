<?php

    require './encaptulation.php';
    $dog = new Animal;

$dog->setName(1);

$dog->setName("Jeniffer");
echo $dog->getName();

echo "<br>";

$woody = new Bird;
$woody->setName("Wooodyyyy");
$woody->setRace("Pileated woodpecker");
echo $woody->getName();
echo "<br>";
echo $woody->getRace();
