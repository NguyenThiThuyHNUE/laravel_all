<?php
$arr = [[1, 2, 3, 4, 5],
        [5, 2, 3, 6, -1],
        [-5, 6, -22, 3, 11]];

    $min=$arr[0][0];
    $index_min=[0][0];
    for ($i=0; $i<count($arr); $i++){
        for ($j=0; $j<count($arr[$i]); $j++){
            if ($arr[$i][$j]<$min){
                $min=$arr[$i][$j];
                $index_min=$i.",".$j;
            }
        }
    }

    echo " min la: ".$min." <br>";
    echo " vi tri min la: ".$index_min;
?>

