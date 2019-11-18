<?php
include_once "Square_Resizeable.php";

class Rectangle_Resizeable extends Square_Resizeable
{
    public $size_two;

    public function __construct($name, $size_one, $size_two)
    {
        parent::__construct($name, $size_one);
        $this->size_two = $size_two;
    }

    public function setRandomSize()
    {
        parent::setRandomSize();
        $this->size_two = $this->resize($this->size_two);

    }

    public function getArea()
    {
        return $this->size_one * $this->size_two;
    }

    public function getSizeTwo()
    {
        return $this->size_two;
    }
}