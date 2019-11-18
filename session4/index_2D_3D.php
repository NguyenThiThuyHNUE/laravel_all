<?php
include "_3D.php";
$_2d=new _2D(5.0,8.0);
echo "2D: "." ".$_2d->toString()."<br>";
var_dump($_2d->GetXY());
$_3d=new _3D(4.0,5.0,9.0);
echo "3D: "." ".$_3d->toString();
?>