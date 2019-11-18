<?php
include_once ('Circle.php');
//include_once ('Cylinder.php');
//include_once ('Rectangle.php');
//include_once ('Square.php');

$circle = new Circle('Circle 01', 3);
echo 'Circle area: ' . $circle->caculateArea() . '<br />';
echo 'Circle perimeter: ' . $circle->caculatePerimeter() . '<br />';

$cylinder = new Cylinder('Cylinder 01', 3 , 4);
echo 'Cylinder area: ' . $cylinder->caculateArea() . '<br />';
echo 'Cylinder perimeter: ' . $cylinder->caculatePerimeter() . '<br />';

$rectangle = new Rectangle('Rectangle 01', 3 , 4);
echo 'Rectangle area: ' . $rectangle->caculateArea() . '<br />';
echo 'Rectangle perimeter: ' . $rectangle->caculatePerimeter() . '<br />';

//$square = new Square('Square 01', 4 , 4, 4);
//echo 'Rectangle area: ' . $square->caculateArea() . '<br />';
//echo 'Rectangle perimeter: ' . $square->caculatePerimeter() . '<br />';
?>
