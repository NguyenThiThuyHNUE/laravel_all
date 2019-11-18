<?php
function centuryFromYear($year)
{
    $arr = [];
    for ($i = 0; $i < strlen($year); $i++) {
        array_push($arr, $year[$i]);
    }
    for ($j = 0; $j < count($arr); $j++) {
        echo (int)$arr[$j].",";
    }
var_dump($arr);
    var_dump((int)$arr[0]);
    var_dump((int)$arr[1]);
    if(count($arr)==2){
        echo 10;
    }elseif (count($arr)==3){
        echo $arr[0]+1;
    }elseif (count($arr)==4 && $arr[0]+$arr[1]==)

}

centuryFromYear("1998");

?>