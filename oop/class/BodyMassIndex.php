<?php


class BodyMassIndex
{
    public $score = 0.0;
    public $category = '';

    public function calculate($height, $weight)
    {
        $this->score = $weight / (($height / 100) * ($height / 100));
    }

    public function determineCategory()
    {
        if ($this->score < 16.0) {
            return 'Underweight (Severe thinness)';
        } elseif ($this->score >= 16.0 && $this->score < 16.9) {
            return 'Underweight (Moderate thinness)';
        } elseif ($this->score >= 16.9 && $this->score < 18.5) {
            return 'Underweight (Mild thinness)';
        } elseif ($this->score >= 18.5 && $this->score < 25.0) {
            return 'Normal range';
        } elseif ($this->score >= 25.0 && $this->score < 30.0) {
            return 'Overweight (Pre-obese)';
        } elseif ($this->score >= 30.0 && $this->score < 35.0) {
            return 'Obese (Class I)';
        } elseif ($this->score >= 35.0 && $this->score < 40.0) {
            return 'Obese (Class II)';
        } elseif ($this->score >= 40.0) {
            return 'Obese (Class III)';
        } else {
            return 'Unknown';
        }
    }
}
?>