<?php
$arr=[2,3,4,5,1,2,0,-5];
$min=$arr[0];
$index_min=0;
for ($i=0; $i<count($arr); $i++){
    if ($arr[$i]<$min){
        $min=$arr[$i];
        $index_min=$i;
    }
}
echo "Phan tu nho nhat la: " .$min ."<br>";
echo "Vi tri thu: ".$i;
?>