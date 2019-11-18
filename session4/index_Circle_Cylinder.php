<?php
//include "Circle_1.php";
include_once "Cylinder_1.php";
$circle_1=new Circle_1(3,"red");
echo $circle_1 ->toString();
$cylinder_1=new Cylinder_1(3,"red", 5);
echo $cylinder_1 ->toString();
?>