<?php
include ("QuadraticEquation.php");
$quadratic=new QuadraticEquation(1,2,1);
echo "so thu nhat la: ".$quadratic->get_A()."<br>";
echo "so thu hai la: ".$quadratic->getB()."<br>";
echo "so thu ba la: ".$quadratic->getC()."<br>";
echo "delta : ".$quadratic->getDiscriminant()."<br>";
echo "x1= ".$quadratic->getRoot1()."<br>";
echo "x2= ".$quadratic->getRoot2();
?>
