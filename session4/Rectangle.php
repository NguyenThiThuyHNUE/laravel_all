<?php
include_once  "Shape.php";

class Rectangle extends Shape
{
    public $width;
    public $height;

    public function __construct($name, $width, $height)
    {
        parent::__construct($name);
        $this->height = $height;
        $this->width=$width;
    }
    public function caculateArea(){
        return $this->width *$this->height;
    }
    public function caculatePerimeter(){
        return ($this->width +$this->height)*2;
    }
}