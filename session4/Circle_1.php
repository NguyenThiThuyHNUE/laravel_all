<?php


class Circle_1
{
public $radius;
public $color= "red";


public function __construct($radius,$color)
{
    $this->radius =$radius;
    $this->color=$color;
}

    public function getRadius()
    {
        return $this->radius;
    }

    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }
    public function Circle_Area(){
        return pi() * $this->radius * $this->radius;
    }
    public function toString(){
    return  " Circle" . " ". " radius: " . " ". $this->radius . " ,". " color: " ." ". $this->color;
    }


}