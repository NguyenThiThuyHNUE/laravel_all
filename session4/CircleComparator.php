<?php
include "Circle_.php";
include "Comparator.php";

class CircleComparator implements Comparator
{
    public $radius;

    public function getRadius()
    {
        return $this->radius;
    }

    public function Compare($circleOne, $circleTwo)
    {
        $radiusOne = $circleOne->getRadius();
        $radiusTwo = $circleTwo->getRadius();
        if ($radiusOne > $radiusTwo) {
            return 1;
        } elseif ($radiusOne < $radiusTwo) {
            return -1;
        } else {
            return 0;
        }
    }
}