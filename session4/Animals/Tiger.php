<?php
include_once(dirname(__FILE__) . "/../AbstractClas/Animal.php");

class Tiger extends Animal
{
    public function makeSound()
    {
        return " tiger: roarrrr!";
    }
}