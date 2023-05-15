<?php

require_once('MassIndex.php');

class RelativeFatMass extends MassIndex {

    private $height = 0;
    private $waistSize = 0;
    private $gender = '';

    public function setHeight($height) {
        $this->height = $height;
    }

    public function setWaistSize($waistSize) {
        $this->waistSize = $waistSize;
    }

    public function setGender($gender) {
        $this->gender = $gender;
    }

    public function calculate($height, $waistSize, $gender) {
        if ($gender === 'm') {
            $this->score = 64 - 20 * ($height / $waistSize);
        } elseif ($gender === 'f') {
            $this->score = 76 - 20 * ($height / $waistSize);
        } else {
            $this->score = 0;
        }
    }

    public function determineCategory($gender) {
        if ($gender === 'm') {
            if ($this->score >= 2 && $this->score <= 5) {
                return 'Essential fat';
            } elseif ($this->score > 5 && $this->score <= 13) {
                return 'Athletes';
            } elseif ($this->score > 13 && $this->score <= 17) {
                return 'Fitness';
            } elseif ($this->score > 17 && $this->score <= 24) {
                return 'Average';
            } elseif ($this->score > 24) {
                return 'Obese';
            }
        } elseif ($gender === 'f') {
            if ($this->score >= 10 && $this->score <= 13) {
                return 'Essential fat';
            } elseif ($this->score > 13 && $this->score <= 20) {
                return 'Athletes';
            } elseif ($this->score > 20 && $this->score <= 24) {
                return 'Fitness';
            } elseif ($this->score > 24 && $this->score <= 31) {
                return 'Average';
            } elseif ($this->score > 31) {
                return 'Obese';
            }
        }

        return 'Unknown';
    }
}

?>