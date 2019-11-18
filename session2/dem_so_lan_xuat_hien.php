<?php
$str='codegymmmm';
function Dem($str,$n){
    $counts=0;
    for($i=0; $i< strlen($str); $i++){
       if ($str[$i]==$n){
           $counts++;
       }
    }
    return $counts;

}
 echo  Dem($str,"m")
//echo count($str)
?>
