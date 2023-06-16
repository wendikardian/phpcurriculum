<?php

require_once 'Rule.php';

class HeightRule extends Rule{
    private $min;
    private $max;

    public function __construct(){
        $this->min = 120;
        $this->max = 220;
    }

    public function isValid($value): bool
    {
        return $value >= $this->min && $value <= $this->max;
    }

    public function getMessage(string $attribute): string
    {
        return "The $attribute must be between $this->min and $this->max.";
    }

}

?>