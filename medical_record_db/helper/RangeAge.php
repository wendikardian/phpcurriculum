<?php

class RangeNumber extends Rule{
    private $min;
    private $max;

    public function __construct(){
        $this->min = 18;
        $this->max = 60;
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