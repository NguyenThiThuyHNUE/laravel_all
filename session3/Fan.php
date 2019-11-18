<?php


class Fan
{
    public $SLOW=1;
    public $MEDIUM = 2;
    public $FAST = 3;
    private $speed;
    public $on=false;
    private $radius=5;
    private $color="blue";


    public function getSLOW()
    {
        return $this->SLOW;
    }

    public function setSLOW($SLOW)
    {
        $this->SLOW = $SLOW;
    }

    public function getMEDIUM()
    {
        return $this->MEDIUM;
    }

    public function setMEDIUM($MEDIUM)
    {
        $this->MEDIUM = $MEDIUM;
    }

    public function getFAST()
    {
        return $this->FAST;
    }

    public function setFAST($FAST)
    {
        $this->FAST = $FAST;
    }

    public function getSpeed()
    {
        return $this->speed;
    }

    public function setSpeed($speed)
    {
        $this->speed = $speed;
    }

    public function isOn()
    {
        if($this->on){
            return "fan is on";
        }else{
            return "fan is off";
        }
    }

    public function setOn($on)
    {
        $this->on = $on;
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
    public function toString(){
        return "speed: ".$this->getSpeed()." ,". "color: ".$this->getColor()." ,"."radion: ".$this->getRadius()." ,". $this->isOn();
    }
}