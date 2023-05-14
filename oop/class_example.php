<?php
    // class Animal{
    //     public $name;
    //     public $foot, $isMammal;

    // }
    class Animal{
        public string $name = "Dog";
        public int $foot = 4;
        public bool $isMammal = true;

    }

    $dog = new Animal();


    $dog->name = "Dog";
    $dog->foot = 4;
    $dog->isMammal = true;
    print_r($dog);
    echo "<br>";
    echo "dog name: " . $dog->name;
    echo "<br>";
    echo "<br>";


    $duck = new Animal();
    $duck->name = "Duck";
    $duck->foot = 2;
    $duck->isMammal = false;
    echo "<br>";
    echo "Duck name: " . $duck->name;
?>