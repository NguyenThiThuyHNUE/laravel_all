<?php
function commonCharacterCount($s1, $s2) {
    $arr1=[];
      for($i=0; $i<strlen($s1); $i++){
          array_push($arr1,$s1[$i]);
      }

    $arr2=[];
        for($j=0; $j<strlen($s2); $j++){
            array_push($arr2,$s1[$j]);
        }

    $count=0;
    for($i=0; $i<count($arr1); $i++){
        for($j=0; $j<count($arr2); $j++){
            if($arr1[$i]==$arr2[$j]){
                var_dump($arr1[$i]);
                echo '<br>';
                echo '<br>';
                var_dump($arr2[$j]);
               $count++;
//               var_dump($count);
                $arr1[$i]='#';
                $arr2[$j]='@';
            }

        }

    }
//    return $count;
}
echo commonCharacterCount('ab','aa');

?>