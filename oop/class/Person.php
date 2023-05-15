
<?php

class Person
{
    public $name = '';
    public $age = 0;
    public $gender = 'm';
    public $height = 0.0;
    public $weight = 0.0;
    public $waistSize = 0.0;

    public function __construct($name = '', $age = 0, $gender = 'm') {
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
    }
    public function bio($name, $age, $gender)
    {
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
    }

    public function bodyFact($height, $weight, $waistSize)
    {
        $this->height = $height;
        $this->weight = $weight;
        $this->waistSize = $waistSize;
    }
}

?>