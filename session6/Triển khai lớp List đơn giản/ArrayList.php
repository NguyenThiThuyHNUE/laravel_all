<?php


class ArrayList
{
    public $arraylist;

    public function __construct()
    {
        $this->arraylist = array();
    }

    public function ArrayList($arr = "")
    {
        if (is_array($arr) == true) {
            $this->arraylist = $arr;
        } else {
            $this->arraylist = array();
        }
    }

    public function add($obj)
    {
        array_push($this->arraylist, $obj);
    }

    public function size()
    {
        return count($this->arraylist);
    }

    public function get($index)
    {
        if ($this->isInteger($index) && $index < $this->size()) {
            return $this->arraylist[$index];
        } else {
            die("ERROR in ArrayList.get");
        }
    }

    public function isInteger($toCheck)
    {
        return preg_match("/^[0-9]+$/", $toCheck);
    }

}
