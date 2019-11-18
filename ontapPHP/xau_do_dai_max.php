<?php
function allLongestStrings($inputArray) {
    $arr=[];
    for($i=0; $i<count($inputArray); $i++){
        array_push($arr,strlen($inputArray[$i]));

    }
    //var_dump($arr);

    $max=$arr[0];
    for($j=0; $j<count($arr); $j++){

        if($arr[$j]>$max){
           $max= $arr[$j];
        }
    }

//var_dump($max);
    $arrnew=[];
    for($x=0; $x<count($inputArray);$x++){
        if(strlen($inputArray[$x]) == $max ){

            array_push($arrnew,$inputArray[$x]);

        }


    }
//    var_dump($arrnew);
    return $arrnew;
}
allLongestStrings(['abc','eeee', 'abcd', 'dcd'])

?>
