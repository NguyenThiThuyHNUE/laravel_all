<?php
include "Circle_1.php";

class Cylinder_1 extends Circle_1
{
public $height;
public function __construct($radius, $color, $height)
{
    parent::__construct($radius, $color);
    $this->height=$height;
}
public function caculatePerimeter(){
    parent::Circle_Area()* $this->height;
}
public function toString()
{
    return parent::toString() . " height: "." ".$this->height;
}
}