<?php

require_once 'Rule.php';

class NumberRule extends Rule
{
    public function isValid($value): bool
    {
        return is_numeric($value);
    }

    public function getMessage(string $attribute): string
    {
        return "The $attribute must be a number.";
    }
}
