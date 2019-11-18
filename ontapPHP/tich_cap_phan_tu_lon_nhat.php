<?php
function adjacentElementsProduct($inputArray)
{
    $arrnew = [];
    for ($i = 0; $i < count($inputArray)-1; $i++) {
        $sum = $inputArray[$i] * $inputArray[$i + 1];
        array_push($arrnew, $sum);
    }

    var_dump($inputArray);
    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<br>';
    var_dump($arrnew);

    $max=$arrnew[0];
    for($j=0; $j<count($arrnew); $j++){
        if($arrnew[$j]>$max){
            $max=$arrnew[$j];
        }
    }
    return $max;

}

echo adjacentElementsProduct([3, 6, -2, -5, 7, 3])

?>
