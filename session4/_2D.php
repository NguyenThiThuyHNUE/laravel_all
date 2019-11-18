<?php


class _2D
{
    public $arr=[];
    public $x = 5.0;
    public $y = 3.0;
    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function getX()
    {
        return $this->x;
    }

    public function getY()
    {
        return $this->y;
    }

    public function setX($x)
    {
        $this->x = $x;
    }

    public function setY($y)
    {
        $this->y = $y;
    }


    public function SetXY($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
        array_push($this->arr,$x);
        array_push($this->arr,$y);
    }
    public function GetXY()
    {
        foreach ($this->arr as $value){
            echo $value;
        }
    }


    public function toString()
    {
        return " x,y: " . $this->x . "," . $this->y;
    }
}