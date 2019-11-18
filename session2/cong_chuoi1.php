<?php
$arr1 = [2, 3, 4, 5, 6];
$arr2 = [7, 8, 9, 10, 11];
$arr3 = [11, 12, 13, 14, 15, 16, 17, 18, 19, 110];
for ($i = 0; $i < count($arr1); $i++) {
    for ($x = 0; $x < count($arr2); $x++) {
        for ($j = 0; $j < 1; $j++) {
            for($y=5; $y<10; $y++){
                $arr3[$j] = $arr1[$i];
                $arr3[$y] = $arr3[$x];
                echo $arr3[$j] . $arr3[$y];
                //echo $arr3[$y];
            }

        }
    }
}

?>
