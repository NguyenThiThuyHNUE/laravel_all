<?php
$arr = [2, 3, 4, 5, 6, 7];
function Delete($arr,$element){
    $n=0;
    for ($i=0; $i<count($arr);$i++){
        if($arr[$i]==$element){
            $n=$i;
        }
    }
    unset($arr[$n]);
    $arr=array_values($arr);
    return $arr;
}

var_dump(Delete($arr,5));



?>