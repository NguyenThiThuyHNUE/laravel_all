
<?php
include "CircleComparator.php";
$circleOne=new Circle_("circleOne",6);
$circleTwo=new  Circle_("circleTwo",4);
$circleComparator=new CircleComparator();
var_dump($circleComparator->Compare($circleOne,$circleTwo));
?>
