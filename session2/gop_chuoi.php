<?php
$arr1=[1,2,3,4];
$arr2=[5,6,7,8,9];
$arr=[];
for ($i=0; $i<count($arr1);$i++){
    $arr[$i]=$arr1[$i];
}
$n=count($arr1);
$m=count($arr2);
for ($i=0; $i<$m;$i++){
    $arr[$n+$i]=$arr2[$i];
} var_dump($arr);
?>
