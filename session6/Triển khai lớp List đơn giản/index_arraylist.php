
<?php
include "ArrayList.php";
$listInteger=new ArrayList();
$listInteger->add(1);
$listInteger->add(5);
$listInteger->add(6);
$listInteger->add(7);
$listInteger->add(9);

echo $listInteger->get(-1);
?>
