<?php
include_once "SquareColorable.php";
include_once "RectrangleColorable.php";
function square(){
    $square=new SquareColorable("hello",4);
    echo " Square:  ".$square->message;
    echo " Area: ".$square->Area();
}
function rectangle(){
    $rectangle=new RectrangleColorable("I am Codegym",30,20);
    echo " Ractangle: ".$rectangle->message;
    echo "Area: ".$rectangle->Area();
}
echo "-------RECTANGLE-------"."<br>";
square();
echo "<br>"."<br>";
echo "------SQUARE-----"."<br>";
rectangle();




?>
