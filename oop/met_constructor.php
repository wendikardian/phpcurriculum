<?php
    class AnotherAnimal{
        public $name, $foot, $isMammal;
        protected $color;
        private $age;

        public function __construct($name, $foot, $isMammal = true){
            $this->name = $name;
            $this->foot = $foot;
            $this->isMammal = $isMammal;
        }
        public function eat($foodName){
            return "{$this->name} eating the {$foodName}";
        }


        function setColorAge($color, $age) {
            $this->color= $color;
            $this->age = $age;
        }

        protected function getAge(){
            return $this->age;
        }


        private function getColor(){
            return $this->color;
        }



    }

    $dog = new AnotherAnimal("Dog", 4);
    echo "<br>";
    $dog->setColorAge("red", 4);
    print_r($dog);
    // echo $dog->age;

?>