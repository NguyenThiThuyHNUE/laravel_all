<?php

include_once "Shape_Resizesble.php";
class Circle_Resizesble extends Shape_Resizesble
{
    public $radius;
  public function __construct($name,$radius)
  {
      parent::__construct($name);
      $this->radius=$radius;
  }

    public function getRadius()
    {
        return $this->radius;
    }

    public function setRandomSize($radius)
    {
        $this->radius = $this->resize($this->getRadius());
    }
   public function getArea()
   {
       return pi()*pow($this->radius,2);
   }
}