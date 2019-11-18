<?php
include_once "Rectangle_Resizeable.php";
include_once "Circle_Resizesble.php";
function rectangle(){
    $rectangle=new Rectangle_Resizeable("rectangle",34,60);
    echo " Area before change size".$rectangle->getArea()."<br>";
    $rectangle->setRandomSize();
    echo "Random Height: ".$rectangle->getSizeTwo()."<br>";
    echo "Random Width: ".$rectangle->getSizeOne()."<br>";
    echo "Area after change size: ".$rectangle->getArea()."<br>";
}
function square(){
    $square=new Square_Resizeable("square",40);
    echo " Area before change size".$square->getArea()."<br>";
    $square->setRandomSize();
    echo "Random size: ".$square->getSizeOne()."<br>";
    echo "Area after change size: ".$square->getArea()."<br>";
}
function circle(){
    $circle=new Circle_Resizesble("circle",40);
    echo " Area before change size".$circle->getArea()."<br>";
    $circle->setRandomSize();
    echo "Random size: ".$circle->getSizeOne()."<br>";
    echo "Area after change size: ".$circle->getArea()."<br>";
}

echo '--RECTANGLE--<br>';
rectangle();
echo '<br><br>';
echo '--SQUARE--<br>';
square();
echo '<br><br>';
echo '--CIRCLE--<br>';
circle();
?>