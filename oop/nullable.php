<?php

    class Animal{
        public ?string $name = "Dog";
        public int $foot = 4;
        public bool $isMammal = true;


        public function introduce(?string $sound) : void{
            echo "This is class of animal !";
            echo "<br>";
            echo "The animal name is : {$this->name} ";
            echo "<br>";
            echo $this->sound($sound);
        }

        public function sayName(?string $sound):?string {
           if($sound){
            return "It's sound is {$sound}!";
           }
           return "The {$this->name} have no sound.!";
        }

        public function getFoot():int{
            return $this->foot;
        }

        public function sound(?string $sound):?string{
            if($sound){
                return "It's sound is {$sound}";
            }
            return null;
        }


    }

    $dog = new Animal();


    $dog->name = "Dog";
    $dog->foot = 4;
    $dog->isMammal = true;



    $duck = new Animal();
    $duck->name = "Duck";
    $duck->foot = 2;
    $duck->isMammal = false;

    $duck->introduce(null);
    echo "<br>";
    echo $duck->sayName(null);
?>