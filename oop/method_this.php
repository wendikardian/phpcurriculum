<?php

    class Animal{
        public string $name = "Dog";
        public int $foot = 4;
        public bool $isMammal = true;


        public function introduce() : void{
            echo "This is class of animal !";
        }

        public function sayName(string $sound):void {
            echo "The animal name is {$this->name}";
            echo "<br>";
            echo "I have total {$this->getFoot()} foots";
            echo "<br>";
            echo "The animal sound is {$this->sound($sound)}";
        }

        public function getFoot():int{
            return $this->foot;
        }

        public function sound(string $sound):string{
            return "It's sound is {$sound}";
        }


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
    echo "<br>";

    $duck->introduce();
    echo "<br>";
    $duck->sayName("DUCKKKKSSS");
?>