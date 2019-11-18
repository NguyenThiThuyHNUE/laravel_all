<?php
include_once(dirname(__FILE__) . "/../AbstractClas/Animal.php");
include_once(dirname(__FILE__) . "/../InterfaceClass/Edible.php");


class Chicken extends Animal implements Edible
{
    public function makeSound()
    {
        return " chiken: cluck-cluck!";
    }
    public function howToEat()
    {
        return " could be fried";
    }

}