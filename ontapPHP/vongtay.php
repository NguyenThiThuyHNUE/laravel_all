<?php
function getMinString($bracelet) {
    $arr=[];
    for($i=0;$i<strlen($bracelet); $i++){
        array_push($arr,$bracelet[$i]);
    }


    $arrindex=[];
  for($i=0; $i<count($arr); $i++){
      if($arr[$i] == min($arr)){
         array_push($arrindex,$i);

      }
  }




}
echo getMinString('ZACAB')

?>