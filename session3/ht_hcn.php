
<?php
        include("hcn.php");
        $rectangle = new Rectangle(10, 5);
//        echo $rectangle->width;
//        echo $rectangle->height;

//        $rectangle->height = 30;
//        $rectangle->width = 20;
//
//        echo $rectangle->height;
//        echo $rectangle->width;
        echo ( " chu vi la: " . $rectangle->getPerimeter());
        echo ("Dien tich la:  " . $rectangle->getArea());
        echo("Your Rectangle" . $rectangle->display());
?>
