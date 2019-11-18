<?php


class number
{
    public $a;
    function an($x){
        $x->a++;
    }
}
$number= new number();
$number->a=13;
an($number);
echo $number->a;