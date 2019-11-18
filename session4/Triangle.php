<?php
include "Shape.php";

class Triangle extends Shape
{
    public $side1 = 1.0;
    public $side2 = 1.0;
    public $side3 = 1.0;
    public function __construct($name,$side1,$side2,$side3)
    {
        parent::__construct($name);
        $this->side1=$side1;
        $this->side2=$side2;
        $this->side3=$side3;
    }

    public function getSide1()
    {
        return $this->side1;
    }

    public function getSide2()
    {
        return $this->side2;
    }

    public function getSide3()
    {
        return $this->side3;
    }

    public function setSide1($side1)
    {
        $this->side1 = $side1;
    }

    public function setSide2($side2)
    {
        $this->side2 = $side2;
    }

    public function setSide3($side3)
    {
        $this->side3 = $side3;
    }
    public function Area_Triangle(){
        return sqrt(($this->side1+$this->side2+$this->side3)+($this->side1+$this->side2-$this->side3)+($this->side2+$this->side3-$this->side1)+($this->side1+$this->side3-$this->side2)/4);
    }
    public function Perimeter_Triangle(){
        return $this->side1+$this->side2+$this->side3;
    }
    public function toString()
    {
        return  parent::toString()."<br>". " Side1: "." ". $this->side1.", ". "Side2: "." ".$this->side2.", ". "Side3: "." ".$this->side3."<br> ". "Area: "." ".$this->Area_Triangle().", ". "Perimeter: "." ".$this->Perimeter_Triangle();
    }
}