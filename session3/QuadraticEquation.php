<?php


class QuadraticEquation
{
    public $a;
    public $b;
    public $c;
    public function __construct($a,$b,$c)
    {
        $this->a=$a;
        $this->b=$b;
        $this->c=$c;
    }
    public function get_A() {
        return $this->a;
    }


    public function getB()
    {
        return $this->b;
    }

    public function getC()
    {
        return $this->c;
    }

    public function setA($a)
    {
        $this->a = $a;
    }

    public function setB($b)
    {
        $this->b = $b;
    }

    /**
     * @param mixed $c
     */
    public function setC($c)
    {
        $this->c = $c;
    }
    public function  getDiscriminant(){
        return $this->b*$this->b-4*$this->a*$this->c;
    }
    public function getRoot1(){
        if ($this->getDiscriminant()>=0){
            return $r1=(-($this->b)+sqrt(($this->b*$this->b - 4*$this->a*$this->c))/(2*$this->a));

        }else{
            return"The equation has no roots";
        }

    }
    public function getRoot2(){
        if ($this->getDiscriminant()>0){
          return $r1=(-($this->b)-sqrt(($this->b*$this->b - 4*$this->a*$this->c))/(2*$this->a));

        }else{
            return"The equation has no roots";
        }

    }
}