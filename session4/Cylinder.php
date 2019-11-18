<?php
include_once "Circle.php";

class Cylinder extends Circle
{
    public $height;

    public function __construct($name, $radius, $height)
    {
        parent::__construct($name, $radius);
        $this->height = $height;
    }
    public function caculateArea()
    {
        return parent::caculateArea() *2 + parent::caculatePerimeter()*$this->height;
    }
    public function caculatePerimeter()
    {
        return parent::caculateArea() * $this->height;
    }

}