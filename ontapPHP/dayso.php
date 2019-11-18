<?php
function getNumber($number) {
    $strNum= (string)$number;
//    var_dump($strNum);
//    var_dump(strlen($strNum));
    $arr=[];
    for($i=0; $i<strlen($strNum); $i++){
        array_push($arr,$strNum[$i]);
    }

    $arrnew=[];
    for($j=0; $j<count($arr); $j++){
       array_push($arrnew,(int)$arr[$j]) ;
    }
//    var_dump($arrnew);


    $arr_number = [0,1,2,3,4,5,6,7,8,9];
    $arr_demo= [];
    for($i=0; $i<count($arrnew)-1; $i++){
        for($j=0; $j<count($arr_number); $j++){
            if($arr_number[$j] !== $arrnew[$i]){
                array_push($arr_demo, $arr_number[$j]);
            }
        }
    } var_dump($arr_demo);
}
echo getNumber(69)
?>