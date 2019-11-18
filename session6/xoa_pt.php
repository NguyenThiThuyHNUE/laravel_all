<?php
$arr = [2, 3, 4, 5, 6, 7];
function delete($arr, $number)
{
    for ($i = 0; $i < count($arr); $i++) {
        if ($i == $number) {
            for ($j = $i; $j < count($arr);$j++){
                $arr[$j] = $arr[$j + 1];
            }
        }
    }
    var_dump($arr);
}

echo delete($arr, 2);


?>
