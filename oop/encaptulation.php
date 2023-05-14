<?php

class Animal{
    private  $age, $isMammal;
    protected $race, $name;

    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name = gettype($name) == 'string' ? $name : null;
    }
}

class Bird extends Animal{
    public function getRace(){
        return $this->race;
    }


    public function setRace($race){
        $this->race = gettype($race) == 'string' ? $race : null;
    }

    public function getName(){
        return "This bird is named the {$this->name}";
    }
}

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
echo $woody->getRace()

?>