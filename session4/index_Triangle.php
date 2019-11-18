<?php
include "Triangle.php";
$shape=new Shape("tam giac");
$triangle=new Triangle("tam giac", 7,6,8);
//echo $triangle->Area_Triangle()."<br>";
//echo $triangle->Perimeter_Triangle()."<br>";
echo $triangle->toString();
?>
