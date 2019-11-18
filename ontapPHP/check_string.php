<?php
//function checkPalindrome($inputString) {
//
//    $len=strlen($inputString);
//    $flag=true;
//    for($i=0; $i<$len/2;$i++){
//        if($inputString[$i] !== $inputString[$len-1-$i]){
//            $flag=false;
//
//            return $flag;
//        }
//
//    }if(!$flag){
//
//        return true;
//    }
//
//}
//echo checkPalindrome('abab')


//
//$len=strlen($inputString);
//for($i=0; $i<$len/2;$i++){
//    if($inputString[$i] !== $inputString[$len-1-$i]){
//        return false;
//    }
//} return true;


use function Sodium\version_string;

function isPalindrome($valueStr, $beginPosition, $endPosition)
{
        if(strlen($valueStr )==2){
            if($valueStr[0]==$valueStr[1]){
                return 1;
            }else return 0;
        }
        $str = substr($valueStr, $beginPosition, $endPosition);
        $len = strlen($str);

        if ($len > 2) {
            for ($i = 0; $i < $len / 2; $i++) {
                if ($str[$i] !== $str[$len - 1 - $i]) {
                    return 0;
                }
            }
            return 1;
        }
         elseif ($len = 1) {
            return 1;
                     }




}


echo isPalindrome('azz', 1, 3);
?>
