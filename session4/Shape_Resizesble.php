<?php

include_once "Resizeable.php";
class Shape_Resizesble implements Resizeable
{
public $name;
public function __construct($name)
{
    $this->name=$name;
}
public function resize($a)
{
    return $a+rand(1,100);
}
public function getArea()
{
    return $this;
}
}