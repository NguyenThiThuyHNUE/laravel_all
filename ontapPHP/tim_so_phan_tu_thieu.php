<?php
function makeArrayConsecutive2($statues)
{ if(count($statues>1)){

    sort($statues);

    $arr = [];

    for ($i = 0; $i < count($statues); $i++) {
        array_push($arr, $statues[$i]);
    }

    $arr1=[];

    for ($j=1; $j<count($arr)-1; $j++){
        array_push($arr1,$arr[$j]);
    }

    $count=max($arr)- min($arr)-1;
    $result= $count-count($arr1);

    return $result;
}
else{
    return 0;
}



}

echo makeArrayConsecutive2([6, 2, 3, 8])
?>
