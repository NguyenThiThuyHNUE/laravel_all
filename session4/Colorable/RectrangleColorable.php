<?php
include_once(dirname(__FILE__) . "/../Colorable/interfaceColorable.php");
include_once (dirname(__FILE__) . "/../Colorable/SquareColorable.php");

class RectrangleColorable extends SquareColorable implements interfaceColorable
{
    public $size1;
    public function __construct($message, $size,$size1)
    {
        parent::__construct($message, $size);
        $this->size1=$size1;
    }

    public function Area()
    {
        return $this->size*$this->size1;
}

    public function howToColor()
    {
        return $this->message;
    }
}