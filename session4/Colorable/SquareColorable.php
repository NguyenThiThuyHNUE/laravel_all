<?php
include_once(dirname(__FILE__)."/../Colorable/interfaceColorable.php");
class SquareColorable implements interfaceColorable
{
public $message;
public $size;
public function __construct($message,$size)
{
    $this->message=$message;
    $this->size=$size;
}

    public function Area(){
    return $this->size*4;
}
    public function howToColor()
    {
        return $this->message;
    }
}