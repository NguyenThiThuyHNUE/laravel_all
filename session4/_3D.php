<?php
include "_2D.php";

class _3D extends _2D
{
    public $z = 2.0;

    public function __construct($x, $y, $z)
    {
        parent::__construct($x, $y);
        $this->z = $z;
    }

    public function getZ()
    {
        return $this->z;
    }

    public function setZ($z)
    {
        $this->z = $z;
    }

    public function SetXYZ($x, $y, $z)
    {
        parent::SetXY($x, $y);
        array_push($this->arr,$z);
    }

    public function getXYZ()
    {
        parent::GetXY();
    }
    public function toString()
    {
        return parent::toString().",".$this->z;
    }
}