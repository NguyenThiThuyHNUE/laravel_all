<?php
$arr = [2, 3, 4, 5, 6, 7];

function delete($arr, $number)
{
    $arrnew=[];
    for ($j = $number; $j < count($arr); $j++) {
        $arr[$j] = $arr[$j + 1];
    }
//    return $arr;
    for($j=0; $j<count($arr)-1;$j++){
       array_push($arrnew,$arr[$j]);
       echo $arrnew[$j].",";
    }


//    var_dump($arrnew);
}

//array_pop($arr);
//
//var_dump($arr);

delete($arr,2);
?>
